<?php

include_once __DIR__ . "/../boot/helpers.php";
include_once __DIR__ . "/Session.php";

class Uploader
{

    private $photo;
    private $message;
    protected $Session;
    public const AllowedTypes = [
        "image/png",
        "image/jpeg",
        "imgage/jpg"
    ];
    public $name;
    public $namePhoto;
    /**
     * @param array $Photo
     */
    public function __construct(array $Photo, string $name = 'produto-foto')
    {
        createFolder();
        $this->photo = $Photo;
        $this->Session = new Session();
        $this->name = $name;
    }

    /**
     * @return boolean
     */
    public function sizeVerification(): bool
    {
        return max_size_allowed($this->photo[$this->name]['size']);
    }

    /**
     * @return string
     */
    public function renamePhoto(bool $rename = false, string $name = 'FP'): string
    {
        if ($rename) {
            return $this->namePhoto = rename_image($this->photo[$this->name]['name'], 'foregon_user_profile_picture');
        }
        return $this->namePhoto = rename_image($this->photo[$this->name]['name'], $name);
        // return rename_image($this->photo[$this->name]['name'], $name);
    }

    public function message()
    {
        return $this->message;
    }
    /**
     * @return void
     */
    public function save(string $dir = 'produtos', bool $rename = false)
    {

        if (in_array($this->photo[$this->name]['type'], self::AllowedTypes)) {
            if ($this->sizeVerification()) {
                if (uploader($this->photo[$this->name]['tmp_name'], __DIR__ . "/../../_storage/{$dir}/{$this->namePhoto}")) {
                    return true;
                }
            } else {
                $this->message = $this->Session->set('message', 'O Arquivo ultrapassa o tamanho máximo permitido! Insira uma imagem com pelo menos 3MB');
                $this->message = $this->Session->set('type', 'danger');
                return false;
            }
        } else {
            $this->message = $this->Session->set('message', 'Tipo de arquvio não permitido! Insira uma imagem PNG , JPEG OU JPG');
            $this->message = $this->Session->set('type', 'danger');
            return false;
        }
    }
}
