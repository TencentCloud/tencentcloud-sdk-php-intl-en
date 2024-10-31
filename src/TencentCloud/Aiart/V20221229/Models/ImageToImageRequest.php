<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageToImage request structure.
 *
 * @method string getInputImage() Obtain Base64 code of the input mage.
Either the Base64 code or URL must be provided. If both are provided, URL prevails.
Image restrictions: The single-edge resolution must be less than 5,000 and greater than 50, and the size after Base64 encoding must be less than 8 MB. Supported formats include JPG, JPEG, PNG, BMP, TIFF and WEBP.
 * @method void setInputImage(string $InputImage) Set Base64 code of the input mage.
Either the Base64 code or URL must be provided. If both are provided, URL prevails.
Image restrictions: The single-edge resolution must be less than 5,000 and greater than 50, and the size after Base64 encoding must be less than 8 MB. Supported formats include JPG, JPEG, PNG, BMP, TIFF and WEBP.
 * @method string getInputUrl() Obtain URL of the input mage.
Either the Base64 code or URL must be provided. If both are provided, URL prevails.
Image restrictions: The single-edge resolution must be less than 5,000 and greater than 50, and the size after Base64 encoding must be less than 8 MB. Supported formats include JPG, JPEG, PNG, BMP, TIFF and WEBP.
 * @method void setInputUrl(string $InputUrl) Set URL of the input mage.
Either the Base64 code or URL must be provided. If both are provided, URL prevails.
Image restrictions: The single-edge resolution must be less than 5,000 and greater than 50, and the size after Base64 encoding must be less than 8 MB. Supported formats include JPG, JPEG, PNG, BMP, TIFF and WEBP.
 * @method string getPrompt() Obtain Text description.
It is used to increase the possibility that the generation result contains the described content.
A maximum of 256 UTF-8 characters are supported.
 * @method void setPrompt(string $Prompt) Set Text description.
It is used to increase the possibility that the generation result contains the described content.
A maximum of 256 UTF-8 characters are supported.
 * @method string getNegativePrompt() Obtain Negative text description.
It is used to reduce the possibility that the generation result contains the described content, but such content cannot be completely avoided.
English is recommended. A maximum of 256 UTF-8 characters are supported.
 * @method void setNegativePrompt(string $NegativePrompt) Set Negative text description.
It is used to reduce the possibility that the generation result contains the described content, but such content cannot be completely avoided.
English is recommended. A maximum of 256 UTF-8 characters are supported.
 * @method array getStyles() Obtain Image style.
Select the desired style from the [Image Style List](https://intl.cloud.tencent.com/document/product/1668/86250?from_cn_redirect=1) and enter the style number.
It is recommended to use only one style. If no style is specified, 201 (anime style) is used by default.
 * @method void setStyles(array $Styles) Set Image style.
Select the desired style from the [Image Style List](https://intl.cloud.tencent.com/document/product/1668/86250?from_cn_redirect=1) and enter the style number.
It is recommended to use only one style. If no style is specified, 201 (anime style) is used by default.
 * @method ResultConfig getResultConfig() Obtain Configurations of the generated image, including the resolution.
Images with the following resolutions can be generated: origin (The resolution is the same as the input image resolution, with the edge resolution of up to 2000. The image will be zoomed out proportionally if the resolution is exceeded.), 768:768 (1:1), 768:1024 (3:4), and 1024:768 (4:3).
If the resolution is not specified, origin is used by default.
 * @method void setResultConfig(ResultConfig $ResultConfig) Set Configurations of the generated image, including the resolution.
Images with the following resolutions can be generated: origin (The resolution is the same as the input image resolution, with the edge resolution of up to 2000. The image will be zoomed out proportionally if the resolution is exceeded.), 768:768 (1:1), 768:1024 (3:4), and 1024:768 (4:3).
If the resolution is not specified, origin is used by default.
 * @method integer getLogoAdd() Obtain Switch indicating whether to add a logo to the generated image. Default value: 1.
1: add logo
0: do not add logo
Other values: add logo
It is recommended to use an obvious logo to indicate that the image result is generated by AI.
 * @method void setLogoAdd(integer $LogoAdd) Set Switch indicating whether to add a logo to the generated image. Default value: 1.
1: add logo
0: do not add logo
Other values: add logo
It is recommended to use an obvious logo to indicate that the image result is generated by AI.
 * @method LogoParam getLogoParam() Obtain Logo content settings.
By default, the text "Generated by AI" is added to the bottom right corner of the generated image. You can also use other logo.
 * @method void setLogoParam(LogoParam $LogoParam) Set Logo content settings.
By default, the text "Generated by AI" is added to the bottom right corner of the generated image. You can also use other logo.
 * @method float getStrength() Obtain Generation strength.
The smaller the strength value, the more the generated image resembles the original image. Value range: (0, 1]. If the strength is not specified, the default value of the model is used.
The recommended value range is 0.6 to 0.8.
 * @method void setStrength(float $Strength) Set Generation strength.
The smaller the strength value, the more the generated image resembles the original image. Value range: (0, 1]. If the strength is not specified, the default value of the model is used.
The recommended value range is 0.6 to 0.8.
 * @method string getRspImgType() Obtain Image return method (base64 or url).
You can specify only one method. Default value: base64.
The URL is valid for 1 hour.
 * @method void setRspImgType(string $RspImgType) Set Image return method (base64 or url).
You can specify only one method. Default value: base64.
The URL is valid for 1 hour.
 * @method integer getEnhanceImage() Obtain Switch indicating whether to  enhance image clarity. Default value: 0.
1: on
0: off
If the switch is turned on, the image clarity will be enhanced and the generation time will increase.
 * @method void setEnhanceImage(integer $EnhanceImage) Set Switch indicating whether to  enhance image clarity. Default value: 0.
1: on
0: off
If the switch is turned on, the image clarity will be enhanced and the generation time will increase.
 * @method integer getRestoreFace() Obtain Maximum number of faces for detail restoration. Value range: 0 - 6. Default value: 0.
If the input value is greater than 0, the value will be used as the maximum number of faces with a small area can be restored in each image. The generation time will increase according to the actual number of faces restored.
 * @method void setRestoreFace(integer $RestoreFace) Set Maximum number of faces for detail restoration. Value range: 0 - 6. Default value: 0.
If the input value is greater than 0, the value will be used as the maximum number of faces with a small area can be restored in each image. The generation time will increase according to the actual number of faces restored.
 */
class ImageToImageRequest extends AbstractModel
{
    /**
     * @var string Base64 code of the input mage.
Either the Base64 code or URL must be provided. If both are provided, URL prevails.
Image restrictions: The single-edge resolution must be less than 5,000 and greater than 50, and the size after Base64 encoding must be less than 8 MB. Supported formats include JPG, JPEG, PNG, BMP, TIFF and WEBP.
     */
    public $InputImage;

    /**
     * @var string URL of the input mage.
Either the Base64 code or URL must be provided. If both are provided, URL prevails.
Image restrictions: The single-edge resolution must be less than 5,000 and greater than 50, and the size after Base64 encoding must be less than 8 MB. Supported formats include JPG, JPEG, PNG, BMP, TIFF and WEBP.
     */
    public $InputUrl;

    /**
     * @var string Text description.
It is used to increase the possibility that the generation result contains the described content.
A maximum of 256 UTF-8 characters are supported.
     */
    public $Prompt;

    /**
     * @var string Negative text description.
It is used to reduce the possibility that the generation result contains the described content, but such content cannot be completely avoided.
English is recommended. A maximum of 256 UTF-8 characters are supported.
     */
    public $NegativePrompt;

    /**
     * @var array Image style.
Select the desired style from the [Image Style List](https://intl.cloud.tencent.com/document/product/1668/86250?from_cn_redirect=1) and enter the style number.
It is recommended to use only one style. If no style is specified, 201 (anime style) is used by default.
     */
    public $Styles;

    /**
     * @var ResultConfig Configurations of the generated image, including the resolution.
Images with the following resolutions can be generated: origin (The resolution is the same as the input image resolution, with the edge resolution of up to 2000. The image will be zoomed out proportionally if the resolution is exceeded.), 768:768 (1:1), 768:1024 (3:4), and 1024:768 (4:3).
If the resolution is not specified, origin is used by default.
     */
    public $ResultConfig;

    /**
     * @var integer Switch indicating whether to add a logo to the generated image. Default value: 1.
1: add logo
0: do not add logo
Other values: add logo
It is recommended to use an obvious logo to indicate that the image result is generated by AI.
     */
    public $LogoAdd;

    /**
     * @var LogoParam Logo content settings.
By default, the text "Generated by AI" is added to the bottom right corner of the generated image. You can also use other logo.
     */
    public $LogoParam;

    /**
     * @var float Generation strength.
The smaller the strength value, the more the generated image resembles the original image. Value range: (0, 1]. If the strength is not specified, the default value of the model is used.
The recommended value range is 0.6 to 0.8.
     */
    public $Strength;

    /**
     * @var string Image return method (base64 or url).
You can specify only one method. Default value: base64.
The URL is valid for 1 hour.
     */
    public $RspImgType;

    /**
     * @var integer Switch indicating whether to  enhance image clarity. Default value: 0.
1: on
0: off
If the switch is turned on, the image clarity will be enhanced and the generation time will increase.
     */
    public $EnhanceImage;

    /**
     * @var integer Maximum number of faces for detail restoration. Value range: 0 - 6. Default value: 0.
If the input value is greater than 0, the value will be used as the maximum number of faces with a small area can be restored in each image. The generation time will increase according to the actual number of faces restored.
     */
    public $RestoreFace;

    /**
     * @param string $InputImage Base64 code of the input mage.
Either the Base64 code or URL must be provided. If both are provided, URL prevails.
Image restrictions: The single-edge resolution must be less than 5,000 and greater than 50, and the size after Base64 encoding must be less than 8 MB. Supported formats include JPG, JPEG, PNG, BMP, TIFF and WEBP.
     * @param string $InputUrl URL of the input mage.
Either the Base64 code or URL must be provided. If both are provided, URL prevails.
Image restrictions: The single-edge resolution must be less than 5,000 and greater than 50, and the size after Base64 encoding must be less than 8 MB. Supported formats include JPG, JPEG, PNG, BMP, TIFF and WEBP.
     * @param string $Prompt Text description.
It is used to increase the possibility that the generation result contains the described content.
A maximum of 256 UTF-8 characters are supported.
     * @param string $NegativePrompt Negative text description.
It is used to reduce the possibility that the generation result contains the described content, but such content cannot be completely avoided.
English is recommended. A maximum of 256 UTF-8 characters are supported.
     * @param array $Styles Image style.
Select the desired style from the [Image Style List](https://intl.cloud.tencent.com/document/product/1668/86250?from_cn_redirect=1) and enter the style number.
It is recommended to use only one style. If no style is specified, 201 (anime style) is used by default.
     * @param ResultConfig $ResultConfig Configurations of the generated image, including the resolution.
Images with the following resolutions can be generated: origin (The resolution is the same as the input image resolution, with the edge resolution of up to 2000. The image will be zoomed out proportionally if the resolution is exceeded.), 768:768 (1:1), 768:1024 (3:4), and 1024:768 (4:3).
If the resolution is not specified, origin is used by default.
     * @param integer $LogoAdd Switch indicating whether to add a logo to the generated image. Default value: 1.
1: add logo
0: do not add logo
Other values: add logo
It is recommended to use an obvious logo to indicate that the image result is generated by AI.
     * @param LogoParam $LogoParam Logo content settings.
By default, the text "Generated by AI" is added to the bottom right corner of the generated image. You can also use other logo.
     * @param float $Strength Generation strength.
The smaller the strength value, the more the generated image resembles the original image. Value range: (0, 1]. If the strength is not specified, the default value of the model is used.
The recommended value range is 0.6 to 0.8.
     * @param string $RspImgType Image return method (base64 or url).
You can specify only one method. Default value: base64.
The URL is valid for 1 hour.
     * @param integer $EnhanceImage Switch indicating whether to  enhance image clarity. Default value: 0.
1: on
0: off
If the switch is turned on, the image clarity will be enhanced and the generation time will increase.
     * @param integer $RestoreFace Maximum number of faces for detail restoration. Value range: 0 - 6. Default value: 0.
If the input value is greater than 0, the value will be used as the maximum number of faces with a small area can be restored in each image. The generation time will increase according to the actual number of faces restored.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InputImage",$param) and $param["InputImage"] !== null) {
            $this->InputImage = $param["InputImage"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("Styles",$param) and $param["Styles"] !== null) {
            $this->Styles = $param["Styles"];
        }

        if (array_key_exists("ResultConfig",$param) and $param["ResultConfig"] !== null) {
            $this->ResultConfig = new ResultConfig();
            $this->ResultConfig->deserialize($param["ResultConfig"]);
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("Strength",$param) and $param["Strength"] !== null) {
            $this->Strength = $param["Strength"];
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }

        if (array_key_exists("EnhanceImage",$param) and $param["EnhanceImage"] !== null) {
            $this->EnhanceImage = $param["EnhanceImage"];
        }

        if (array_key_exists("RestoreFace",$param) and $param["RestoreFace"] !== null) {
            $this->RestoreFace = $param["RestoreFace"];
        }
    }
}
