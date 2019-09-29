<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "third_party/image-resize/ImageResize.php";
include APPPATH . "third_party/image-resize/ImageResizeException.php";

use \Gumlet\ImageResize;
use \Gumlet\ImageResizeException;

class Upload_model extends CI_Model
{
    //upload temp image
    public function upload_temp_image($file_name, $response)
    {
        if (isset($_FILES[$file_name])) {
            if (empty($_FILES[$file_name]['name'])) {
                return null;
            }
        }
        $config['upload_path'] = './uploads/tmp/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = 'img_' . generate_unique_id();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_name)) {
            $data = array('upload_data' => $this->upload->data());
            if (isset($data['upload_data']['full_path'])) {
                if ($response == 'array') {
                    return $data['upload_data'];
                } else {
                    return $data['upload_data']['full_path'];
                }
            }
            return null;
        } else {
            return null;
        }
    }

    //post gif image upload
    public function post_gif_image_upload($file_name)
    {
        rename(FCPATH . 'uploads/tmp/' . $file_name, FCPATH . 'uploads/images/blogs/' . $file_name);
        return 'uploads/images/blogs/' . $file_name;
    }

    //post big image upload
    public function post_big_image_upload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->crop(720, 390, true);
            $new_path = 'uploads/images/blogs/riskiwebid_' . uniqid() . '_720x390_.jpg';
            $image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
            return $new_path;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //post default image upload
    public function post_default_image_upload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->resizeToWidth(1024);
            $new_path = 'uploads/images/blogs/riskiwebid_' . uniqid() . '_max.jpg';
            $image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
            return $new_path;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //post slider image upload
    public function post_slider_image_upload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->crop(640, 354, true);
            $new_path = 'uploads/images/blogs/riskiwebid_' . uniqid() . '_640x354_.jpg';
            $image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
            return $new_path;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //post mid image upload
    public function post_mid_image_upload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->crop(380, 210, true);
            $new_path = 'uploads/images/blogs/riskiwebid_' . uniqid() . '_380x210_.jpg';
            $image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
            return $new_path;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //post small image upload
    public function post_small_image_upload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 50;
            $image->resizeToWidth(52);
            $new_path = 'uploads/images/blogs/riskiwebid_' . uniqid() . '_blur.jpg';
            $image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
            return $new_path;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //gallery big image upload
    public function gallery_big_image_upload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->resizeToWidth(1080);
            $new_path = 'uploads/images/work/riskiwebid_' . uniqid() . '_max.jpg';
            $image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
            return $new_path;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //gallery small image upload
    public function gallery_small_image_upload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->resizeToWidth(480);
            $new_path = 'uploads/images/work/riskiwebid_' . uniqid() . '480xauto_.jpg';
            $image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
            return $new_path;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //gallery gif image upload
    public function gallery_gif_image_upload($file_name)
    {
        rename(FCPATH . 'uploads/tmp/' . $file_name, FCPATH . 'uploads/images/work/' . $file_name);
        return 'uploads/images/work/' . $file_name;
    }

    //avatar image upload
    public function avatar_upload($user_id, $path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->crop(200, 200, true);
            $new_path = 'uploads/profile/pic_' . $user_id . '_' . uniqid() . '.jpg';
            $image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
            return $new_path;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //logo image upload
    public function logo_upload($file_name)
    {
        $config['upload_path'] = './uploads/logo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['file_name'] = 'riskiwebid_logo' . uniqid();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_name)) {
            $data = array('upload_data' => $this->upload->data());
            if (isset($data['upload_data']['full_path'])) {
                return 'uploads/logo/' . $data['upload_data']['file_name'];
            }
            return null;
        } else {
            return null;
        }
    }

    //favicon image upload
    public function favicon_upload($file_name)
    {
        $config['upload_path'] = './uploads/logo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = 'riskiwebid_favicon_' . uniqid();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_name)) {
            $data = array('upload_data' => $this->upload->data());
            if (isset($data['upload_data']['full_path'])) {
                return 'uploads/logo/' . $data['upload_data']['file_name'];
            }
            return null;
        } else {
            return null;
        }
    }

    //ad upload
    public function ad_upload($file_name)
    {
        $config['upload_path'] = './uploads/ads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = 'block_' . uniqid();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_name)) {
            $data = array('upload_data' => $this->upload->data());
            if (isset($data['upload_data']['full_path'])) {
                return 'uploads/ads/' . $data['upload_data']['file_name'];
            }
            return null;
        } else {
            return null;
        }
    }

    //audio upload
    public function audio_upload($file_name)
    {
        $allowed_types = array('mp3', 'wav');
        if (!$this->check_file_mime_type($file_name, $allowed_types)) {
            return false;
        }
        $config['upload_path'] = './uploads/audios/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_name)) {
            $data = array('upload_data' => $this->upload->data());
            if (isset($data['upload_data']['full_path'])) {
                return 'uploads/audios/' . $data['upload_data']['file_name'];
            }
            return null;
        } else {
            return null;
        }
    }

    //video upload
    public function video_upload($file_name)
    {
        $config['upload_path'] = './uploads/videos/';
        $config['allowed_types'] = 'mp4|webm';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_name)) {
            $data = array('upload_data' => $this->upload->data());
            if (isset($data['upload_data']['full_path'])) {
                return 'uploads/videos/' . $data['upload_data']['file_name'];
            }
            return null;
        } else {
            return null;
        }
    }

    //check file mime type
    public function check_file_mime_type($file_name, $allowed_types)
    {
        if (!isset($_FILES[$file_name])) {
            return false;
        }
        if (empty($_FILES[$file_name]['name'])) {
            return false;
        }
        $ext = pathinfo($_FILES[$file_name]['name'], PATHINFO_EXTENSION);
        if (in_array($ext, $allowed_types)) {
            return true;
        }
        return false;
    }

    //delete temp image
    public function delete_temp_image($path)
    {
        if (file_exists($path)) {
            @unlink($path);
        }
    }
}