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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveRecordTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name. Only letters, digits, underscores, and hyphens can be contained.
 * @method void setTemplateName(string $TemplateName) Set Template name. Only letters, digits, underscores, and hyphens can be contained.
 * @method string getDescription() Obtain Message description
 * @method void setDescription(string $Description) Set Message description
 * @method RecordParam getFlvParam() Obtain FLV recording parameter, which is set when FLV recording is enabled.
 * @method void setFlvParam(RecordParam $FlvParam) Set FLV recording parameter, which is set when FLV recording is enabled.
 * @method RecordParam getHlsParam() Obtain HLS recording parameter, which is set when HLS recording is enabled.
 * @method void setHlsParam(RecordParam $HlsParam) Set HLS recording parameter, which is set when HLS recording is enabled.
 * @method RecordParam getMp4Param() Obtain Mp4 recording parameter, which is set when Mp4 recording is enabled.
 * @method void setMp4Param(RecordParam $Mp4Param) Set Mp4 recording parameter, which is set when Mp4 recording is enabled.
 * @method RecordParam getAacParam() Obtain AAC recording parameter, which is set when AAC recording is enabled.
 * @method void setAacParam(RecordParam $AacParam) Set AAC recording parameter, which is set when AAC recording is enabled.
 * @method integer getIsDelayLive() Obtain LVB type. Default value: 0.
0: LVB.
1: LCB.
 * @method void setIsDelayLive(integer $IsDelayLive) Set LVB type. Default value: 0.
0: LVB.
1: LCB.
 * @method HlsSpecialParam getHlsSpecialParam() Obtain HLS-specific recording parameter.
 * @method void setHlsSpecialParam(HlsSpecialParam $HlsSpecialParam) Set HLS-specific recording parameter.
 * @method RecordParam getMp3Param() Obtain Mp3 recording parameter, which is set when Mp3 recording is enabled.
 * @method void setMp3Param(RecordParam $Mp3Param) Set Mp3 recording parameter, which is set when Mp3 recording is enabled.
 * @method boolean getRemoveWatermark() Obtain Whether to remove the watermark. This parameter is invalid if `IsDelayLive` is `1`.
 * @method void setRemoveWatermark(boolean $RemoveWatermark) Set Whether to remove the watermark. This parameter is invalid if `IsDelayLive` is `1`.
 * @method FlvSpecialParam getFlvSpecialParam() Obtain A special parameter for FLV recording.
 * @method void setFlvSpecialParam(FlvSpecialParam $FlvSpecialParam) Set A special parameter for FLV recording.
 */
class CreateLiveRecordTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name. Only letters, digits, underscores, and hyphens can be contained.
     */
    public $TemplateName;

    /**
     * @var string Message description
     */
    public $Description;

    /**
     * @var RecordParam FLV recording parameter, which is set when FLV recording is enabled.
     */
    public $FlvParam;

    /**
     * @var RecordParam HLS recording parameter, which is set when HLS recording is enabled.
     */
    public $HlsParam;

    /**
     * @var RecordParam Mp4 recording parameter, which is set when Mp4 recording is enabled.
     */
    public $Mp4Param;

    /**
     * @var RecordParam AAC recording parameter, which is set when AAC recording is enabled.
     */
    public $AacParam;

    /**
     * @var integer LVB type. Default value: 0.
0: LVB.
1: LCB.
     */
    public $IsDelayLive;

    /**
     * @var HlsSpecialParam HLS-specific recording parameter.
     */
    public $HlsSpecialParam;

    /**
     * @var RecordParam Mp3 recording parameter, which is set when Mp3 recording is enabled.
     */
    public $Mp3Param;

    /**
     * @var boolean Whether to remove the watermark. This parameter is invalid if `IsDelayLive` is `1`.
     */
    public $RemoveWatermark;

    /**
     * @var FlvSpecialParam A special parameter for FLV recording.
     */
    public $FlvSpecialParam;

    /**
     * @param string $TemplateName Template name. Only letters, digits, underscores, and hyphens can be contained.
     * @param string $Description Message description
     * @param RecordParam $FlvParam FLV recording parameter, which is set when FLV recording is enabled.
     * @param RecordParam $HlsParam HLS recording parameter, which is set when HLS recording is enabled.
     * @param RecordParam $Mp4Param Mp4 recording parameter, which is set when Mp4 recording is enabled.
     * @param RecordParam $AacParam AAC recording parameter, which is set when AAC recording is enabled.
     * @param integer $IsDelayLive LVB type. Default value: 0.
0: LVB.
1: LCB.
     * @param HlsSpecialParam $HlsSpecialParam HLS-specific recording parameter.
     * @param RecordParam $Mp3Param Mp3 recording parameter, which is set when Mp3 recording is enabled.
     * @param boolean $RemoveWatermark Whether to remove the watermark. This parameter is invalid if `IsDelayLive` is `1`.
     * @param FlvSpecialParam $FlvSpecialParam A special parameter for FLV recording.
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FlvParam",$param) and $param["FlvParam"] !== null) {
            $this->FlvParam = new RecordParam();
            $this->FlvParam->deserialize($param["FlvParam"]);
        }

        if (array_key_exists("HlsParam",$param) and $param["HlsParam"] !== null) {
            $this->HlsParam = new RecordParam();
            $this->HlsParam->deserialize($param["HlsParam"]);
        }

        if (array_key_exists("Mp4Param",$param) and $param["Mp4Param"] !== null) {
            $this->Mp4Param = new RecordParam();
            $this->Mp4Param->deserialize($param["Mp4Param"]);
        }

        if (array_key_exists("AacParam",$param) and $param["AacParam"] !== null) {
            $this->AacParam = new RecordParam();
            $this->AacParam->deserialize($param["AacParam"]);
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("HlsSpecialParam",$param) and $param["HlsSpecialParam"] !== null) {
            $this->HlsSpecialParam = new HlsSpecialParam();
            $this->HlsSpecialParam->deserialize($param["HlsSpecialParam"]);
        }

        if (array_key_exists("Mp3Param",$param) and $param["Mp3Param"] !== null) {
            $this->Mp3Param = new RecordParam();
            $this->Mp3Param->deserialize($param["Mp3Param"]);
        }

        if (array_key_exists("RemoveWatermark",$param) and $param["RemoveWatermark"] !== null) {
            $this->RemoveWatermark = $param["RemoveWatermark"];
        }

        if (array_key_exists("FlvSpecialParam",$param) and $param["FlvSpecialParam"] !== null) {
            $this->FlvSpecialParam = new FlvSpecialParam();
            $this->FlvSpecialParam->deserialize($param["FlvSpecialParam"]);
        }
    }
}
