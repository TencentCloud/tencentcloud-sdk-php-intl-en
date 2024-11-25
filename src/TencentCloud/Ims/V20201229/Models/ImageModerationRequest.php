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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageModeration request structure.
 *
 * @method string getBizType() Obtain This field indicates the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. If the `Biztype` parameter is passed in, a moderation policy will be used based on the business scenario; otherwise, the default moderation policy will be used.<br>Note: `Biztype` can contain 3-32 digits, letters, and underscores; different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API.
 * @method void setBizType(string $BizType) Set This field indicates the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. If the `Biztype` parameter is passed in, a moderation policy will be used based on the business scenario; otherwise, the default moderation policy will be used.<br>Note: `Biztype` can contain 3-32 digits, letters, and underscores; different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API.
 * @method string getDataId() Obtain This field indicates the data ID assigned by you to the object to be detected for easier file identification and management.<br>It **can contain up to 64 letters, digits, and special symbols (_-@#)**.
 * @method void setDataId(string $DataId) Set This field indicates the data ID assigned by you to the object to be detected for easier file identification and management.<br>It **can contain up to 64 letters, digits, and special symbols (_-@#)**.
 * @method string getFileContent() Obtain This field indicates the Base64 encoding of the image to be detected. The image **size cannot exceed 5 MB**. **A resolution of 256x256 or higher is recommended**; otherwise, the recognition effect may be affected.<br>Note: **you must enter a value for either this field or `FileUrl`**.
 * @method void setFileContent(string $FileContent) Set This field indicates the Base64 encoding of the image to be detected. The image **size cannot exceed 5 MB**. **A resolution of 256x256 or higher is recommended**; otherwise, the recognition effect may be affected.<br>Note: **you must enter a value for either this field or `FileUrl`**.
 * @method string getFileUrl() Obtain URL of the image to moderate. It supports PNG, JPG, JPEG, BMP, GIF AND WEBP files. The file **cannot exceed 5 MB** and the resolution should not below **256*246**. The default timeout period is 3 seconds. Note that **redirection URLs may be blocked by security policies**. In this case, an error message will return. For example, if an HTTP request gets the 302 code, the error `ResourceUnavailable.ImageDownloadError` is returned. <br>**Either `FileUrl` or `FileContent` must be specified. 
 * @method void setFileUrl(string $FileUrl) Set URL of the image to moderate. It supports PNG, JPG, JPEG, BMP, GIF AND WEBP files. The file **cannot exceed 5 MB** and the resolution should not below **256*246**. The default timeout period is 3 seconds. Note that **redirection URLs may be blocked by security policies**. In this case, an error message will return. For example, if an HTTP request gets the 302 code, the error `ResourceUnavailable.ImageDownloadError` is returned. <br>**Either `FileUrl` or `FileContent` must be specified. 
 * @method integer getInterval() Obtain **For GIF/long image detection only**. This field indicates the GIF frame capturing frequency (the image interval for capturing a frame for detection). For long images, you should round the width:height ratio as the total number of images to be split. The default value is 0, where only the first frame of the GIF image will be detected, and the long image will not be split.<br>Note: the `Interval` and `MaxFrames` parameters need to be used in combination; for example, if `Interval` is `3` and `MaxFrames` is `400`, the GIF/long image will be detected once every two frames for up to 400 frames.
 * @method void setInterval(integer $Interval) Set **For GIF/long image detection only**. This field indicates the GIF frame capturing frequency (the image interval for capturing a frame for detection). For long images, you should round the width:height ratio as the total number of images to be split. The default value is 0, where only the first frame of the GIF image will be detected, and the long image will not be split.<br>Note: the `Interval` and `MaxFrames` parameters need to be used in combination; for example, if `Interval` is `3` and `MaxFrames` is `400`, the GIF/long image will be detected once every two frames for up to 400 frames.
 * @method integer getMaxFrames() Obtain **For GIF/long image detection only**. This field indicates the maximum number of frames that can be captured. The default value is 1, where only the first frame of the input GIF image will be detected, and the long image will not be split (which may cause a processing timeout).<br>Note: the `Interval` and `MaxFrames` parameters need to be used in combination; for example, if `Interval` is `3` and `MaxFrames` is `400`, the GIF/long image will be detected once every two frames for up to 400 frames.
 * @method void setMaxFrames(integer $MaxFrames) Set **For GIF/long image detection only**. This field indicates the maximum number of frames that can be captured. The default value is 1, where only the first frame of the input GIF image will be detected, and the long image will not be split (which may cause a processing timeout).<br>Note: the `Interval` and `MaxFrames` parameters need to be used in combination; for example, if `Interval` is `3` and `MaxFrames` is `400`, the GIF/long image will be detected once every two frames for up to 400 frames.
 * @method User getUser() Obtain This field indicates the information of the user that corresponds to the object to be detected. It can be passed in to identify the user involved in the violation.
 * @method void setUser(User $User) Set This field indicates the information of the user that corresponds to the object to be detected. It can be passed in to identify the user involved in the violation.
 * @method Device getDevice() Obtain This field indicates the information of the device that corresponds to the object to be detected. It can be passed in to identify the device involved in the violation.
 * @method void setDevice(Device $Device) Set This field indicates the information of the device that corresponds to the object to be detected. It can be passed in to identify the device involved in the violation.
 */
class ImageModerationRequest extends AbstractModel
{
    /**
     * @var string This field indicates the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. If the `Biztype` parameter is passed in, a moderation policy will be used based on the business scenario; otherwise, the default moderation policy will be used.<br>Note: `Biztype` can contain 3-32 digits, letters, and underscores; different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API.
     */
    public $BizType;

    /**
     * @var string This field indicates the data ID assigned by you to the object to be detected for easier file identification and management.<br>It **can contain up to 64 letters, digits, and special symbols (_-@#)**.
     */
    public $DataId;

    /**
     * @var string This field indicates the Base64 encoding of the image to be detected. The image **size cannot exceed 5 MB**. **A resolution of 256x256 or higher is recommended**; otherwise, the recognition effect may be affected.<br>Note: **you must enter a value for either this field or `FileUrl`**.
     */
    public $FileContent;

    /**
     * @var string URL of the image to moderate. It supports PNG, JPG, JPEG, BMP, GIF AND WEBP files. The file **cannot exceed 5 MB** and the resolution should not below **256*246**. The default timeout period is 3 seconds. Note that **redirection URLs may be blocked by security policies**. In this case, an error message will return. For example, if an HTTP request gets the 302 code, the error `ResourceUnavailable.ImageDownloadError` is returned. <br>**Either `FileUrl` or `FileContent` must be specified. 
     */
    public $FileUrl;

    /**
     * @var integer **For GIF/long image detection only**. This field indicates the GIF frame capturing frequency (the image interval for capturing a frame for detection). For long images, you should round the width:height ratio as the total number of images to be split. The default value is 0, where only the first frame of the GIF image will be detected, and the long image will not be split.<br>Note: the `Interval` and `MaxFrames` parameters need to be used in combination; for example, if `Interval` is `3` and `MaxFrames` is `400`, the GIF/long image will be detected once every two frames for up to 400 frames.
     */
    public $Interval;

    /**
     * @var integer **For GIF/long image detection only**. This field indicates the maximum number of frames that can be captured. The default value is 1, where only the first frame of the input GIF image will be detected, and the long image will not be split (which may cause a processing timeout).<br>Note: the `Interval` and `MaxFrames` parameters need to be used in combination; for example, if `Interval` is `3` and `MaxFrames` is `400`, the GIF/long image will be detected once every two frames for up to 400 frames.
     */
    public $MaxFrames;

    /**
     * @var User This field indicates the information of the user that corresponds to the object to be detected. It can be passed in to identify the user involved in the violation.
     */
    public $User;

    /**
     * @var Device This field indicates the information of the device that corresponds to the object to be detected. It can be passed in to identify the device involved in the violation.
     */
    public $Device;

    /**
     * @param string $BizType This field indicates the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. If the `Biztype` parameter is passed in, a moderation policy will be used based on the business scenario; otherwise, the default moderation policy will be used.<br>Note: `Biztype` can contain 3-32 digits, letters, and underscores; different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API.
     * @param string $DataId This field indicates the data ID assigned by you to the object to be detected for easier file identification and management.<br>It **can contain up to 64 letters, digits, and special symbols (_-@#)**.
     * @param string $FileContent This field indicates the Base64 encoding of the image to be detected. The image **size cannot exceed 5 MB**. **A resolution of 256x256 or higher is recommended**; otherwise, the recognition effect may be affected.<br>Note: **you must enter a value for either this field or `FileUrl`**.
     * @param string $FileUrl URL of the image to moderate. It supports PNG, JPG, JPEG, BMP, GIF AND WEBP files. The file **cannot exceed 5 MB** and the resolution should not below **256*246**. The default timeout period is 3 seconds. Note that **redirection URLs may be blocked by security policies**. In this case, an error message will return. For example, if an HTTP request gets the 302 code, the error `ResourceUnavailable.ImageDownloadError` is returned. <br>**Either `FileUrl` or `FileContent` must be specified. 
     * @param integer $Interval **For GIF/long image detection only**. This field indicates the GIF frame capturing frequency (the image interval for capturing a frame for detection). For long images, you should round the width:height ratio as the total number of images to be split. The default value is 0, where only the first frame of the GIF image will be detected, and the long image will not be split.<br>Note: the `Interval` and `MaxFrames` parameters need to be used in combination; for example, if `Interval` is `3` and `MaxFrames` is `400`, the GIF/long image will be detected once every two frames for up to 400 frames.
     * @param integer $MaxFrames **For GIF/long image detection only**. This field indicates the maximum number of frames that can be captured. The default value is 1, where only the first frame of the input GIF image will be detected, and the long image will not be split (which may cause a processing timeout).<br>Note: the `Interval` and `MaxFrames` parameters need to be used in combination; for example, if `Interval` is `3` and `MaxFrames` is `400`, the GIF/long image will be detected once every two frames for up to 400 frames.
     * @param User $User This field indicates the information of the user that corresponds to the object to be detected. It can be passed in to identify the user involved in the violation.
     * @param Device $Device This field indicates the information of the device that corresponds to the object to be detected. It can be passed in to identify the device involved in the violation.
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MaxFrames",$param) and $param["MaxFrames"] !== null) {
            $this->MaxFrames = $param["MaxFrames"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }
    }
}
