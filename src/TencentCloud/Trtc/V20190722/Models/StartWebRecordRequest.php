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
 * @method string getRecordUrl() Obtain [Required] webpage URL that needs to be recorded.
 * @method void setRecordUrl(string $RecordUrl) Set [Required] webpage URL that needs to be recorded.
 * @method StorageParams getStorageParams() Obtain [Required] cloud storage related parameters. currently supports tencent cloud object storage as well as VOD. no support for third-party cloud storage. the storage format of the output file is only supported for hls or mp4.
 * @method void setStorageParams(StorageParams $StorageParams) Set [Required] cloud storage related parameters. currently supports tencent cloud object storage as well as VOD. no support for third-party cloud storage. the storage format of the output file is only supported for hls or mp4.
 * @method integer getSdkAppId() Obtain [Required] the SdkAppId of TRTC.
 * @method void setSdkAppId(integer $SdkAppId) Set [Required] the SdkAppId of TRTC.
 * @method integer getMaxDurationLimit() Obtain Maximum recording duration limit in seconds. valid values [1800, 86400]. default 86400s (24 hr).
 * @method void setMaxDurationLimit(integer $MaxDurationLimit) Set Maximum recording duration limit in seconds. valid values [1800, 86400]. default 86400s (24 hr).
 * @method WebRecordVideoParams getWebRecordVideoParams() Obtain Page recording video parameter.
 * @method void setWebRecordVideoParams(WebRecordVideoParams $WebRecordVideoParams) Set Page recording video parameter.
 * @method string getRecordId() Obtain When sensitive to repetition tasks, pay attention to this value: to avoid triggering tasks repeatedly in a short time frame, which may lead to task duplication.
Import the recording RecordId to identify the task, less than 32 bytes. if carrying RecordId initiates start recording requests more than twice, only one task will start up, and the second will report error FailedOperation.TaskExist. note that when StartWebRecord call fails instead of FailedOperation.TaskExist error, change RecordId and re-initiate the request.
 * @method void setRecordId(string $RecordId) Set When sensitive to repetition tasks, pay attention to this value: to avoid triggering tasks repeatedly in a short time frame, which may lead to task duplication.
Import the recording RecordId to identify the task, less than 32 bytes. if carrying RecordId initiates start recording requests more than twice, only one task will start up, and the second will report error FailedOperation.TaskExist. note that when StartWebRecord call fails instead of FailedOperation.TaskExist error, change RecordId and re-initiate the request.
 * @method array getPublishCdnParams() Obtain If you want to push stream to CDN, you can configure parameters in PublishCdnParams.N. it supports streaming simultaneously to up to 10 CDN addresses. if the relay address is tencent cloud CDN, set IsTencentCdn to 1.
 * @method void setPublishCdnParams(array $PublishCdnParams) Set If you want to push stream to CDN, you can configure parameters in PublishCdnParams.N. it supports streaming simultaneously to up to 10 CDN addresses. if the relay address is tencent cloud CDN, set IsTencentCdn to 1.
 * @method integer getReadyTimeout() Obtain Timeout period for recording page resource loading, unit: second. default value is 0, which must be greater than or equal to 0 and less than or equal to 60. do not set this parameter when page loading timeout detection is disabled for the recording page.
 * @method void setReadyTimeout(integer $ReadyTimeout) Set Timeout period for recording page resource loading, unit: second. default value is 0, which must be greater than or equal to 0 and less than or equal to 60. do not set this parameter when page loading timeout detection is disabled for the recording page.
 * @method EmulateMobileParams getEmulateMobileParams() Obtain Render the mobile mode parameter. do not set this parameter when not preparing to render the mobile mode webpage.
 * @method void setEmulateMobileParams(EmulateMobileParams $EmulateMobileParams) Set Render the mobile mode parameter. do not set this parameter when not preparing to render the mobile mode webpage.
 */
class StartWebRecordRequest extends AbstractModel
{
    /**
     * @var string [Required] webpage URL that needs to be recorded.
     */
    public $RecordUrl;

    /**
     * @var StorageParams [Required] cloud storage related parameters. currently supports tencent cloud object storage as well as VOD. no support for third-party cloud storage. the storage format of the output file is only supported for hls or mp4.
     */
    public $StorageParams;

    /**
     * @var integer [Required] the SdkAppId of TRTC.
     */
    public $SdkAppId;

    /**
     * @var integer Maximum recording duration limit in seconds. valid values [1800, 86400]. default 86400s (24 hr).
     */
    public $MaxDurationLimit;

    /**
     * @var WebRecordVideoParams Page recording video parameter.
     */
    public $WebRecordVideoParams;

    /**
     * @var string When sensitive to repetition tasks, pay attention to this value: to avoid triggering tasks repeatedly in a short time frame, which may lead to task duplication.
Import the recording RecordId to identify the task, less than 32 bytes. if carrying RecordId initiates start recording requests more than twice, only one task will start up, and the second will report error FailedOperation.TaskExist. note that when StartWebRecord call fails instead of FailedOperation.TaskExist error, change RecordId and re-initiate the request.
     */
    public $RecordId;

    /**
     * @var array If you want to push stream to CDN, you can configure parameters in PublishCdnParams.N. it supports streaming simultaneously to up to 10 CDN addresses. if the relay address is tencent cloud CDN, set IsTencentCdn to 1.
     */
    public $PublishCdnParams;

    /**
     * @var integer Timeout period for recording page resource loading, unit: second. default value is 0, which must be greater than or equal to 0 and less than or equal to 60. do not set this parameter when page loading timeout detection is disabled for the recording page.
     */
    public $ReadyTimeout;

    /**
     * @var EmulateMobileParams Render the mobile mode parameter. do not set this parameter when not preparing to render the mobile mode webpage.
     */
    public $EmulateMobileParams;

    /**
     * @param string $RecordUrl [Required] webpage URL that needs to be recorded.
     * @param StorageParams $StorageParams [Required] cloud storage related parameters. currently supports tencent cloud object storage as well as VOD. no support for third-party cloud storage. the storage format of the output file is only supported for hls or mp4.
     * @param integer $SdkAppId [Required] the SdkAppId of TRTC.
     * @param integer $MaxDurationLimit Maximum recording duration limit in seconds. valid values [1800, 86400]. default 86400s (24 hr).
     * @param WebRecordVideoParams $WebRecordVideoParams Page recording video parameter.
     * @param string $RecordId When sensitive to repetition tasks, pay attention to this value: to avoid triggering tasks repeatedly in a short time frame, which may lead to task duplication.
Import the recording RecordId to identify the task, less than 32 bytes. if carrying RecordId initiates start recording requests more than twice, only one task will start up, and the second will report error FailedOperation.TaskExist. note that when StartWebRecord call fails instead of FailedOperation.TaskExist error, change RecordId and re-initiate the request.
     * @param array $PublishCdnParams If you want to push stream to CDN, you can configure parameters in PublishCdnParams.N. it supports streaming simultaneously to up to 10 CDN addresses. if the relay address is tencent cloud CDN, set IsTencentCdn to 1.
     * @param integer $ReadyTimeout Timeout period for recording page resource loading, unit: second. default value is 0, which must be greater than or equal to 0 and less than or equal to 60. do not set this parameter when page loading timeout detection is disabled for the recording page.
     * @param EmulateMobileParams $EmulateMobileParams Render the mobile mode parameter. do not set this parameter when not preparing to render the mobile mode webpage.
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

        if (array_key_exists("StorageParams",$param) and $param["StorageParams"] !== null) {
            $this->StorageParams = new StorageParams();
            $this->StorageParams->deserialize($param["StorageParams"]);
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("MaxDurationLimit",$param) and $param["MaxDurationLimit"] !== null) {
            $this->MaxDurationLimit = $param["MaxDurationLimit"];
        }

        if (array_key_exists("WebRecordVideoParams",$param) and $param["WebRecordVideoParams"] !== null) {
            $this->WebRecordVideoParams = new WebRecordVideoParams();
            $this->WebRecordVideoParams->deserialize($param["WebRecordVideoParams"]);
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
