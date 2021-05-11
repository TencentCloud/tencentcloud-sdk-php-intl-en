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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General stream mix control parameter
 *
 * @method integer getUseMixCropCenter() Obtain Value range: [0,1]. 
If 1 is entered, when the layer resolution in the parameter is different from the actual video resolution, the video will be automatically cropped according to the resolution set by the layer.
 * @method void setUseMixCropCenter(integer $UseMixCropCenter) Set Value range: [0,1]. 
If 1 is entered, when the layer resolution in the parameter is different from the actual video resolution, the video will be automatically cropped according to the resolution set by the layer.
 * @method integer getAllowCopy() Obtain Value range: [0,1].
If this parameter is set to 1, when both `InputStreamList` and `OutputParams.OutputStreamType` are set to 1, you can copy a stream instead of canceling it.
 * @method void setAllowCopy(integer $AllowCopy) Set Value range: [0,1].
If this parameter is set to 1, when both `InputStreamList` and `OutputParams.OutputStreamType` are set to 1, you can copy a stream instead of canceling it.
 * @method integer getPassInputSei() Obtain Valid values: 0, 1
If you set this parameter to 1, SEI (Supplemental Enhanced Information) of the input streams will be passed through.
 * @method void setPassInputSei(integer $PassInputSei) Set Valid values: 0, 1
If you set this parameter to 1, SEI (Supplemental Enhanced Information) of the input streams will be passed through.
 */
class CommonMixControlParams extends AbstractModel
{
    /**
     * @var integer Value range: [0,1]. 
If 1 is entered, when the layer resolution in the parameter is different from the actual video resolution, the video will be automatically cropped according to the resolution set by the layer.
     */
    public $UseMixCropCenter;

    /**
     * @var integer Value range: [0,1].
If this parameter is set to 1, when both `InputStreamList` and `OutputParams.OutputStreamType` are set to 1, you can copy a stream instead of canceling it.
     */
    public $AllowCopy;

    /**
     * @var integer Valid values: 0, 1
If you set this parameter to 1, SEI (Supplemental Enhanced Information) of the input streams will be passed through.
     */
    public $PassInputSei;

    /**
     * @param integer $UseMixCropCenter Value range: [0,1]. 
If 1 is entered, when the layer resolution in the parameter is different from the actual video resolution, the video will be automatically cropped according to the resolution set by the layer.
     * @param integer $AllowCopy Value range: [0,1].
If this parameter is set to 1, when both `InputStreamList` and `OutputParams.OutputStreamType` are set to 1, you can copy a stream instead of canceling it.
     * @param integer $PassInputSei Valid values: 0, 1
If you set this parameter to 1, SEI (Supplemental Enhanced Information) of the input streams will be passed through.
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
        if (array_key_exists("UseMixCropCenter",$param) and $param["UseMixCropCenter"] !== null) {
            $this->UseMixCropCenter = $param["UseMixCropCenter"];
        }

        if (array_key_exists("AllowCopy",$param) and $param["AllowCopy"] !== null) {
            $this->AllowCopy = $param["AllowCopy"];
        }

        if (array_key_exists("PassInputSei",$param) and $param["PassInputSei"] !== null) {
            $this->PassInputSei = $param["PassInputSei"];
        }
    }
}
