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
 * Control parameters for cloud moderation.
 *
 * @method integer getModerationType() Obtain Moderation task type. 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio slicing moderation + video frame extraction moderation; 4: audio stream moderation; 5: audio stream moderation + video frame extraction moderation. The default value is 1. (Support from suppliers is required for stream moderation to take effect.)
 * @method void setModerationType(integer $ModerationType) Set Moderation task type. 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio slicing moderation + video frame extraction moderation; 4: audio stream moderation; 5: audio stream moderation + video frame extraction moderation. The default value is 1. (Support from suppliers is required for stream moderation to take effect.)
 * @method integer getMaxIdleTime() Obtain Slicing is stopped automatically when there is no user (anchor) performing upstream push in the room for more than MaxIdleTime. Unit: seconds. Default value: 30 seconds. This value needs to be greater than or equal to 5 seconds and less than or equal to 1800 seconds (0.5 hours). Example value: 30.
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set Slicing is stopped automatically when there is no user (anchor) performing upstream push in the room for more than MaxIdleTime. Unit: seconds. Default value: 30 seconds. This value needs to be greater than or equal to 5 seconds and less than or equal to 1800 seconds (0.5 hours). Example value: 30.
 * @method integer getSliceAudio() Obtain Audio slicing duration. Default value: 15s. Example value: 15.
 * @method void setSliceAudio(integer $SliceAudio) Set Audio slicing duration. Default value: 15s. Example value: 15.
 * @method integer getSliceVideo() Obtain Interval for video frame extraction. Default value: 5s.
 * @method void setSliceVideo(integer $SliceVideo) Set Interval for video frame extraction. Default value: 5s.
 * @method string getModerationSupplier() Obtain Enumeration values for suppliers.
tianyu: Tencent Tianyu content security. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
ace: ACE content security. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
shumei: shumei moderation. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
Yidun: NetEase Yidun moderation. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
 * @method void setModerationSupplier(string $ModerationSupplier) Set Enumeration values for suppliers.
tianyu: Tencent Tianyu content security. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
ace: ACE content security. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
shumei: shumei moderation. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
Yidun: NetEase Yidun moderation. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
 * @method ModerationSupplierParam getModerationSupplierParam() Obtain Configuration information required for submitting content to the third-party moderation supplier.
 * @method void setModerationSupplierParam(ModerationSupplierParam $ModerationSupplierParam) Set Configuration information required for submitting content to the third-party moderation supplier.
 * @method integer getSaveModerationFile() Obtain Whether to save file. 0: not save by default; 1: save; 2 save the hit file.
 * @method void setSaveModerationFile(integer $SaveModerationFile) Set Whether to save file. 0: not save by default; 1: save; 2 save the hit file.
 * @method integer getCallbackAllResults() Obtain Whether to call back all moderation results: 0: call back all results by default; 1: only call back hit results.
 * @method void setCallbackAllResults(integer $CallbackAllResults) Set Whether to call back all moderation results: 0: call back all results by default; 1: only call back hit results.
 * @method SubscribeModerationUserIds getSubscribeStreamUserIds() Obtain Specifies the allowlist or blocklist for the subscription stream.
 * @method void setSubscribeStreamUserIds(SubscribeModerationUserIds $SubscribeStreamUserIds) Set Specifies the allowlist or blocklist for the subscription stream.
 */
class ModerationParams extends AbstractModel
{
    /**
     * @var integer Moderation task type. 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio slicing moderation + video frame extraction moderation; 4: audio stream moderation; 5: audio stream moderation + video frame extraction moderation. The default value is 1. (Support from suppliers is required for stream moderation to take effect.)
     */
    public $ModerationType;

    /**
     * @var integer Slicing is stopped automatically when there is no user (anchor) performing upstream push in the room for more than MaxIdleTime. Unit: seconds. Default value: 30 seconds. This value needs to be greater than or equal to 5 seconds and less than or equal to 1800 seconds (0.5 hours). Example value: 30.
     */
    public $MaxIdleTime;

    /**
     * @var integer Audio slicing duration. Default value: 15s. Example value: 15.
     */
    public $SliceAudio;

    /**
     * @var integer Interval for video frame extraction. Default value: 5s.
     */
    public $SliceVideo;

    /**
     * @var string Enumeration values for suppliers.
tianyu: Tencent Tianyu content security. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
ace: ACE content security. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
shumei: shumei moderation. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
Yidun: NetEase Yidun moderation. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
     */
    public $ModerationSupplier;

    /**
     * @var ModerationSupplierParam Configuration information required for submitting content to the third-party moderation supplier.
     */
    public $ModerationSupplierParam;

    /**
     * @var integer Whether to save file. 0: not save by default; 1: save; 2 save the hit file.
     */
    public $SaveModerationFile;

    /**
     * @var integer Whether to call back all moderation results: 0: call back all results by default; 1: only call back hit results.
     */
    public $CallbackAllResults;

    /**
     * @var SubscribeModerationUserIds Specifies the allowlist or blocklist for the subscription stream.
     */
    public $SubscribeStreamUserIds;

    /**
     * @param integer $ModerationType Moderation task type. 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio slicing moderation + video frame extraction moderation; 4: audio stream moderation; 5: audio stream moderation + video frame extraction moderation. The default value is 1. (Support from suppliers is required for stream moderation to take effect.)
     * @param integer $MaxIdleTime Slicing is stopped automatically when there is no user (anchor) performing upstream push in the room for more than MaxIdleTime. Unit: seconds. Default value: 30 seconds. This value needs to be greater than or equal to 5 seconds and less than or equal to 1800 seconds (0.5 hours). Example value: 30.
     * @param integer $SliceAudio Audio slicing duration. Default value: 15s. Example value: 15.
     * @param integer $SliceVideo Interval for video frame extraction. Default value: 5s.
     * @param string $ModerationSupplier Enumeration values for suppliers.
tianyu: Tencent Tianyu content security. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
ace: ACE content security. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
shumei: shumei moderation. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
Yidun: NetEase Yidun moderation. (Valid values: 1: audio slicing moderation; 2: video frame extraction moderation; 3: audio-visual slicing moderation + video frame extraction moderation.)
     * @param ModerationSupplierParam $ModerationSupplierParam Configuration information required for submitting content to the third-party moderation supplier.
     * @param integer $SaveModerationFile Whether to save file. 0: not save by default; 1: save; 2 save the hit file.
     * @param integer $CallbackAllResults Whether to call back all moderation results: 0: call back all results by default; 1: only call back hit results.
     * @param SubscribeModerationUserIds $SubscribeStreamUserIds Specifies the allowlist or blocklist for the subscription stream.
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
        if (array_key_exists("ModerationType",$param) and $param["ModerationType"] !== null) {
            $this->ModerationType = $param["ModerationType"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("SliceAudio",$param) and $param["SliceAudio"] !== null) {
            $this->SliceAudio = $param["SliceAudio"];
        }

        if (array_key_exists("SliceVideo",$param) and $param["SliceVideo"] !== null) {
            $this->SliceVideo = $param["SliceVideo"];
        }

        if (array_key_exists("ModerationSupplier",$param) and $param["ModerationSupplier"] !== null) {
            $this->ModerationSupplier = $param["ModerationSupplier"];
        }

        if (array_key_exists("ModerationSupplierParam",$param) and $param["ModerationSupplierParam"] !== null) {
            $this->ModerationSupplierParam = new ModerationSupplierParam();
            $this->ModerationSupplierParam->deserialize($param["ModerationSupplierParam"]);
        }

        if (array_key_exists("SaveModerationFile",$param) and $param["SaveModerationFile"] !== null) {
            $this->SaveModerationFile = $param["SaveModerationFile"];
        }

        if (array_key_exists("CallbackAllResults",$param) and $param["CallbackAllResults"] !== null) {
            $this->CallbackAllResults = $param["CallbackAllResults"];
        }

        if (array_key_exists("SubscribeStreamUserIds",$param) and $param["SubscribeStreamUserIds"] !== null) {
            $this->SubscribeStreamUserIds = new SubscribeModerationUserIds();
            $this->SubscribeStreamUserIds->deserialize($param["SubscribeStreamUserIds"]);
        }
    }
}
