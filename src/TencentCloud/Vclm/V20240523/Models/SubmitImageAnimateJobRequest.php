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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitImageAnimateJob request structure.
 *
 * @method string getImageUrl() Obtain Image format: PNG, JPG, and JPEG formats are supported.
Image resolution: The long edge resolution should not exceed 2056.
Image size: The size should not exceed 10 MB.
Image aspect ratio: The ratio of width to height should be in the range of 1:2 to 1:1.2.
 * @method void setImageUrl(string $ImageUrl) Set Image format: PNG, JPG, and JPEG formats are supported.
Image resolution: The long edge resolution should not exceed 2056.
Image size: The size should not exceed 10 MB.
Image aspect ratio: The ratio of width to height should be in the range of 1:2 to 1:1.2.
 * @method string getImageBase64() Obtain Image information after Base64 encoding. Image format: PNG, JPG, and JPEG formats are supported. Image resolution: The long side resolution should not exceed 2056. Image size: The size should not exceed 10 MB. Image aspect ratio: The ratio of width to height should be in the range of 1:2 to 1:1.2.
 * @method void setImageBase64(string $ImageBase64) Set Image information after Base64 encoding. Image format: PNG, JPG, and JPEG formats are supported. Image resolution: The long side resolution should not exceed 2056. Image size: The size should not exceed 10 MB. Image aspect ratio: The ratio of width to height should be in the range of 1:2 to 1:1.2.
 * @method string getTemplateId() Obtain Action template ID. ke3: kemusan; tuziwu: rabbit dance; huajiangwu: paddling dance.

 * @method void setTemplateId(string $TemplateId) Set Action template ID. ke3: kemusan; tuziwu: rabbit dance; huajiangwu: paddling dance.

 * @method boolean getEnableAudio() Obtain Whether the generated video retains the audio in the template. The default value is true.
 * @method void setEnableAudio(boolean $EnableAudio) Set Whether the generated video retains the audio in the template. The default value is true.
 * @method boolean getEnableBodyJoins() Obtain Whether to detect 12 body parts in the input image (head, neck, right shoulder, right elbow, right wrist, left shoulder, left elbow, left wrist, right hip, left hip, left knee, and right knee). They are not detected by default.
 * @method void setEnableBodyJoins(boolean $EnableBodyJoins) Set Whether to detect 12 body parts in the input image (head, neck, right shoulder, right elbow, right wrist, left shoulder, left elbow, left wrist, right hip, left hip, left knee, and right knee). They are not detected by default.
 * @method boolean getEnableSegment() Obtain Whether the final video retains the background of the original image. (This parameter does not take effect when TemplateId is set to tuziwu or huajiangwu.)

 * @method void setEnableSegment(boolean $EnableSegment) Set Whether the final video retains the background of the original image. (This parameter does not take effect when TemplateId is set to tuziwu or huajiangwu.)

 * @method integer getLogoAdd() Obtain Whether to add a mark to the generated video. The default value is 0.
1: A mark is added.
0: No mark is added.
Other values: A mark is added by default.
It is recommended to use an obvious mark to indicate that the video is synthesized by AI.
 * @method void setLogoAdd(integer $LogoAdd) Set Whether to add a mark to the generated video. The default value is 0.
1: A mark is added.
0: No mark is added.
Other values: A mark is added by default.
It is recommended to use an obvious mark to indicate that the video is synthesized by AI.
 * @method LogoParam getLogoParam() Obtain Mark text settings.
By default, the text "Synthesized by AI" is added to the bottom right corner of the generated video. You can also use other text images.
 * @method void setLogoParam(LogoParam $LogoParam) Set Mark text settings.
By default, the text "Synthesized by AI" is added to the bottom right corner of the generated video. You can also use other text images.
 */
class SubmitImageAnimateJobRequest extends AbstractModel
{
    /**
     * @var string Image format: PNG, JPG, and JPEG formats are supported.
Image resolution: The long edge resolution should not exceed 2056.
Image size: The size should not exceed 10 MB.
Image aspect ratio: The ratio of width to height should be in the range of 1:2 to 1:1.2.
     */
    public $ImageUrl;

    /**
     * @var string Image information after Base64 encoding. Image format: PNG, JPG, and JPEG formats are supported. Image resolution: The long side resolution should not exceed 2056. Image size: The size should not exceed 10 MB. Image aspect ratio: The ratio of width to height should be in the range of 1:2 to 1:1.2.
     */
    public $ImageBase64;

    /**
     * @var string Action template ID. ke3: kemusan; tuziwu: rabbit dance; huajiangwu: paddling dance.

     */
    public $TemplateId;

    /**
     * @var boolean Whether the generated video retains the audio in the template. The default value is true.
     */
    public $EnableAudio;

    /**
     * @var boolean Whether to detect 12 body parts in the input image (head, neck, right shoulder, right elbow, right wrist, left shoulder, left elbow, left wrist, right hip, left hip, left knee, and right knee). They are not detected by default.
     */
    public $EnableBodyJoins;

    /**
     * @var boolean Whether the final video retains the background of the original image. (This parameter does not take effect when TemplateId is set to tuziwu or huajiangwu.)

     */
    public $EnableSegment;

    /**
     * @var integer Whether to add a mark to the generated video. The default value is 0.
1: A mark is added.
0: No mark is added.
Other values: A mark is added by default.
It is recommended to use an obvious mark to indicate that the video is synthesized by AI.
     */
    public $LogoAdd;

    /**
     * @var LogoParam Mark text settings.
By default, the text "Synthesized by AI" is added to the bottom right corner of the generated video. You can also use other text images.
     */
    public $LogoParam;

    /**
     * @param string $ImageUrl Image format: PNG, JPG, and JPEG formats are supported.
Image resolution: The long edge resolution should not exceed 2056.
Image size: The size should not exceed 10 MB.
Image aspect ratio: The ratio of width to height should be in the range of 1:2 to 1:1.2.
     * @param string $ImageBase64 Image information after Base64 encoding. Image format: PNG, JPG, and JPEG formats are supported. Image resolution: The long side resolution should not exceed 2056. Image size: The size should not exceed 10 MB. Image aspect ratio: The ratio of width to height should be in the range of 1:2 to 1:1.2.
     * @param string $TemplateId Action template ID. ke3: kemusan; tuziwu: rabbit dance; huajiangwu: paddling dance.

     * @param boolean $EnableAudio Whether the generated video retains the audio in the template. The default value is true.
     * @param boolean $EnableBodyJoins Whether to detect 12 body parts in the input image (head, neck, right shoulder, right elbow, right wrist, left shoulder, left elbow, left wrist, right hip, left hip, left knee, and right knee). They are not detected by default.
     * @param boolean $EnableSegment Whether the final video retains the background of the original image. (This parameter does not take effect when TemplateId is set to tuziwu or huajiangwu.)

     * @param integer $LogoAdd Whether to add a mark to the generated video. The default value is 0.
1: A mark is added.
0: No mark is added.
Other values: A mark is added by default.
It is recommended to use an obvious mark to indicate that the video is synthesized by AI.
     * @param LogoParam $LogoParam Mark text settings.
By default, the text "Synthesized by AI" is added to the bottom right corner of the generated video. You can also use other text images.
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("EnableAudio",$param) and $param["EnableAudio"] !== null) {
            $this->EnableAudio = $param["EnableAudio"];
        }

        if (array_key_exists("EnableBodyJoins",$param) and $param["EnableBodyJoins"] !== null) {
            $this->EnableBodyJoins = $param["EnableBodyJoins"];
        }

        if (array_key_exists("EnableSegment",$param) and $param["EnableSegment"] !== null) {
            $this->EnableSegment = $param["EnableSegment"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}
