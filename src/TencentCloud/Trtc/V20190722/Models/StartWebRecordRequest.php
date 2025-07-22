<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartWebRecord request structure.
 *
 * @method string getRecordUrl() Obtain URL of the web page to be recorded
 * @method void setRecordUrl(string $RecordUrl) Set URL of the web page to be recorded
 * @method integer getMaxDurationLimit() Obtain Maximum recording duration limit, in seconds. Valid range: [1800, 36000]. Default is 36,000 seconds (10 hours).
 * @method void setMaxDurationLimit(integer $MaxDurationLimit) Set Maximum recording duration limit, in seconds. Valid range: [1800, 36000]. Default is 36,000 seconds (10 hours).
 * @method StorageParams getStorageParams() Obtain [Required] Parameters related to cloud storage. Currently, Tencent Cloud Object Storage and Tencent Cloud VOD are supported, but third-party cloud storage is not supported. The storage format of the output file only supports hls or mp4.
 * @method void setStorageParams(StorageParams $StorageParams) Set [Required] Parameters related to cloud storage. Currently, Tencent Cloud Object Storage and Tencent Cloud VOD are supported, but third-party cloud storage is not supported. The storage format of the output file only supports hls or mp4.
 * @method WebRecordVideoParams getWebRecordVideoParams() Obtain web-page recording video parameters
 * @method void setWebRecordVideoParams(WebRecordVideoParams $WebRecordVideoParams) Set web-page recording video parameters
 * @method integer getSdkAppId() Obtain [Required] The SDKAppID of the TRTC room 
 * @method void setSdkAppId(integer $SdkAppId) Set [Required] The SDKAppID of the TRTC room 
 * @method string getRecordId() Obtain When sensitive to repetitive tasks, please pay attention to this value: To avoid tasks being initiated repeatedly in a short period, leading to task duplication, pass in the recording RecordId to identify the current task. The RecordId should be less than 32 bytes. If you carry the RecordId and initiate the start recording request more than once, only one task will be started, and the second one will report the error FailedOperation.TaskExist. Note that if the StartWebRecord call fails with an error other than FailedOperation.TaskExist, please change the RecordId and initiate the request again.
 * @method void setRecordId(string $RecordId) Set When sensitive to repetitive tasks, please pay attention to this value: To avoid tasks being initiated repeatedly in a short period, leading to task duplication, pass in the recording RecordId to identify the current task. The RecordId should be less than 32 bytes. If you carry the RecordId and initiate the start recording request more than once, only one task will be started, and the second one will report the error FailedOperation.TaskExist. Note that if the StartWebRecord call fails with an error other than FailedOperation.TaskExist, please change the RecordId and initiate the request again.
 * @method array getPublishCdnParams() Obtain If you want to push the stream to a CDN, you can use the PublishCdnParams.N parameter to set it. It supports pushing streams to up to 10 CDN addresses simultaneously. If the relay address is a Tencent Cloud CDN, please explicitly set IsTencentCdn to 1.
 * @method void setPublishCdnParams(array $PublishCdnParams) Set If you want to push the stream to a CDN, you can use the PublishCdnParams.N parameter to set it. It supports pushing streams to up to 10 CDN addresses simultaneously. If the relay address is a Tencent Cloud CDN, please explicitly set IsTencentCdn to 1.
 * @method integer getReadyTimeout() Obtain The timeout for loading page resources during recording, in seconds. The default value is 0 seconds. This value must be greater than or equal to 0 seconds and less than or equal to 60 seconds. If page load timeout detection is not enabled for the recording page, please do not set this parameter.
 * @method void setReadyTimeout(integer $ReadyTimeout) Set The timeout for loading page resources during recording, in seconds. The default value is 0 seconds. This value must be greater than or equal to 0 seconds and less than or equal to 60 seconds. If page load timeout detection is not enabled for the recording page, please do not set this parameter.
 * @method EmulateMobileParams getEmulateMobileParams() Obtain Render mobile mode parameters; do not set this parameter if you are not going to render mobile mode pages.
 * @method void setEmulateMobileParams(EmulateMobileParams $EmulateMobileParams) Set Render mobile mode parameters; do not set this parameter if you are not going to render mobile mode pages.
 */
class StartWebRecordRequest extends AbstractModel
{
    /**
     * @var string URL of the web page to be recorded
     */
    public $RecordUrl;

    /**
     * @var integer Maximum recording duration limit, in seconds. Valid range: [1800, 36000]. Default is 36,000 seconds (10 hours).
     */
    public $MaxDurationLimit;

    /**
     * @var StorageParams [Required] Parameters related to cloud storage. Currently, Tencent Cloud Object Storage and Tencent Cloud VOD are supported, but third-party cloud storage is not supported. The storage format of the output file only supports hls or mp4.
     */
    public $StorageParams;

    /**
     * @var WebRecordVideoParams web-page recording video parameters
     */
    public $WebRecordVideoParams;

    /**
     * @var integer [Required] The SDKAppID of the TRTC room 
     */
    public $SdkAppId;

    /**
     * @var string When sensitive to repetitive tasks, please pay attention to this value: To avoid tasks being initiated repeatedly in a short period, leading to task duplication, pass in the recording RecordId to identify the current task. The RecordId should be less than 32 bytes. If you carry the RecordId and initiate the start recording request more than once, only one task will be started, and the second one will report the error FailedOperation.TaskExist. Note that if the StartWebRecord call fails with an error other than FailedOperation.TaskExist, please change the RecordId and initiate the request again.
     */
    public $RecordId;

    /**
     * @var array If you want to push the stream to a CDN, you can use the PublishCdnParams.N parameter to set it. It supports pushing streams to up to 10 CDN addresses simultaneously. If the relay address is a Tencent Cloud CDN, please explicitly set IsTencentCdn to 1.
     */
    public $PublishCdnParams;

    /**
     * @var integer The timeout for loading page resources during recording, in seconds. The default value is 0 seconds. This value must be greater than or equal to 0 seconds and less than or equal to 60 seconds. If page load timeout detection is not enabled for the recording page, please do not set this parameter.
     */
    public $ReadyTimeout;

    /**
     * @var EmulateMobileParams Render mobile mode parameters; do not set this parameter if you are not going to render mobile mode pages.
     */
    public $EmulateMobileParams;

    /**
     * @param string $RecordUrl URL of the web page to be recorded
     * @param integer $MaxDurationLimit Maximum recording duration limit, in seconds. Valid range: [1800, 36000]. Default is 36,000 seconds (10 hours).
     * @param StorageParams $StorageParams [Required] Parameters related to cloud storage. Currently, Tencent Cloud Object Storage and Tencent Cloud VOD are supported, but third-party cloud storage is not supported. The storage format of the output file only supports hls or mp4.
     * @param WebRecordVideoParams $WebRecordVideoParams web-page recording video parameters
     * @param integer $SdkAppId [Required] The SDKAppID of the TRTC room 
     * @param string $RecordId When sensitive to repetitive tasks, please pay attention to this value: To avoid tasks being initiated repeatedly in a short period, leading to task duplication, pass in the recording RecordId to identify the current task. The RecordId should be less than 32 bytes. If you carry the RecordId and initiate the start recording request more than once, only one task will be started, and the second one will report the error FailedOperation.TaskExist. Note that if the StartWebRecord call fails with an error other than FailedOperation.TaskExist, please change the RecordId and initiate the request again.
     * @param array $PublishCdnParams If you want to push the stream to a CDN, you can use the PublishCdnParams.N parameter to set it. It supports pushing streams to up to 10 CDN addresses simultaneously. If the relay address is a Tencent Cloud CDN, please explicitly set IsTencentCdn to 1.
     * @param integer $ReadyTimeout The timeout for loading page resources during recording, in seconds. The default value is 0 seconds. This value must be greater than or equal to 0 seconds and less than or equal to 60 seconds. If page load timeout detection is not enabled for the recording page, please do not set this parameter.
     * @param EmulateMobileParams $EmulateMobileParams Render mobile mode parameters; do not set this parameter if you are not going to render mobile mode pages.
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
        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("MaxDurationLimit",$param) and $param["MaxDurationLimit"] !== null) {
            $this->MaxDurationLimit = $param["MaxDurationLimit"];
        }

        if (array_key_exists("StorageParams",$param) and $param["StorageParams"] !== null) {
            $this->StorageParams = new StorageParams();
            $this->StorageParams->deserialize($param["StorageParams"]);
        }

        if (array_key_exists("WebRecordVideoParams",$param) and $param["WebRecordVideoParams"] !== null) {
            $this->WebRecordVideoParams = new WebRecordVideoParams();
            $this->WebRecordVideoParams->deserialize($param["WebRecordVideoParams"]);
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("PublishCdnParams",$param) and $param["PublishCdnParams"] !== null) {
            $this->PublishCdnParams = [];
            foreach ($param["PublishCdnParams"] as $key => $value){
                $obj = new McuPublishCdnParam();
                $obj->deserialize($value);
                array_push($this->PublishCdnParams, $obj);
            }
        }

        if (array_key_exists("ReadyTimeout",$param) and $param["ReadyTimeout"] !== null) {
            $this->ReadyTimeout = $param["ReadyTimeout"];
        }

        if (array_key_exists("EmulateMobileParams",$param) and $param["EmulateMobileParams"] !== null) {
            $this->EmulateMobileParams = new EmulateMobileParams();
            $this->EmulateMobileParams->deserialize($param["EmulateMobileParams"]);
        }
    }
}
