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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FuseFace request structure.
 *
 * @method string getProjectId() Obtain Activity ID. Check the ID in the <a href="https://console.cloud.tencent.com/facefusion" target="_blank"> Face Fusion console</a>.
 * @method void setProjectId(string $ProjectId) Set Activity ID. Check the ID in the <a href="https://console.cloud.tencent.com/facefusion" target="_blank"> Face Fusion console</a>.
 * @method string getModelId() Obtain Material ID. Check the ID in the <a href="https://console.cloud.tencent.com/facefusion" target="_blank"> Face Fusion console</a>.
 * @method void setModelId(string $ModelId) Set Material ID. Check the ID in the <a href="https://console.cloud.tencent.com/facefusion" target="_blank"> Face Fusion console</a>.
 * @method string getRspImgType() Obtain Image return method (url or base64). You cannot use both methods at the same time. The URL is valid for 7 days.
 * @method void setRspImgType(string $RspImgType) Set Image return method (url or base64). You cannot use both methods at the same time. The URL is valid for 7 days.
 * @method array getMergeInfos() Obtain Face position information on the user face image and material template image. No more than 6 entries.
 * @method void setMergeInfos(array $MergeInfos) Set Face position information on the user face image and material template image. No more than 6 entries.
 * @method integer getLogoAdd() Obtain Switch indicating whether to add a synthesis logo to the fusion result image. Default value: 1.
1: add logo
0: do not add logo
Other values: add logo
It is recommended to use an obvious logo to indicate that the result image uses face fusion technology and is synthesized by AI.
 * @method void setLogoAdd(integer $LogoAdd) Set Switch indicating whether to add a synthesis logo to the fusion result image. Default value: 1.
1: add logo
0: do not add logo
Other values: add logo
It is recommended to use an obvious logo to indicate that the result image uses face fusion technology and is synthesized by AI.
 * @method LogoParam getLogoParam() Obtain Logo content settings
By default, the text "Synthesized by AI" is added to the bottom right corner of the fusion result image. You can also use other texts.
 * @method void setLogoParam(LogoParam $LogoParam) Set Logo content settings
By default, the text "Synthesized by AI" is added to the bottom right corner of the fusion result image. You can also use other texts.
 * @method FuseParam getFuseParam() Obtain Fusion parameter.
 * @method void setFuseParam(FuseParam $FuseParam) Set Fusion parameter.
 */
class FuseFaceRequest extends AbstractModel
{
    /**
     * @var string Activity ID. Check the ID in the <a href="https://console.cloud.tencent.com/facefusion" target="_blank"> Face Fusion console</a>.
     */
    public $ProjectId;

    /**
     * @var string Material ID. Check the ID in the <a href="https://console.cloud.tencent.com/facefusion" target="_blank"> Face Fusion console</a>.
     */
    public $ModelId;

    /**
     * @var string Image return method (url or base64). You cannot use both methods at the same time. The URL is valid for 7 days.
     */
    public $RspImgType;

    /**
     * @var array Face position information on the user face image and material template image. No more than 6 entries.
     */
    public $MergeInfos;

    /**
     * @var integer Switch indicating whether to add a synthesis logo to the fusion result image. Default value: 1.
1: add logo
0: do not add logo
Other values: add logo
It is recommended to use an obvious logo to indicate that the result image uses face fusion technology and is synthesized by AI.
     */
    public $LogoAdd;

    /**
     * @var LogoParam Logo content settings
By default, the text "Synthesized by AI" is added to the bottom right corner of the fusion result image. You can also use other texts.
     */
    public $LogoParam;

    /**
     * @var FuseParam Fusion parameter.
     */
    public $FuseParam;

    /**
     * @param string $ProjectId Activity ID. Check the ID in the <a href="https://console.cloud.tencent.com/facefusion" target="_blank"> Face Fusion console</a>.
     * @param string $ModelId Material ID. Check the ID in the <a href="https://console.cloud.tencent.com/facefusion" target="_blank"> Face Fusion console</a>.
     * @param string $RspImgType Image return method (url or base64). You cannot use both methods at the same time. The URL is valid for 7 days.
     * @param array $MergeInfos Face position information on the user face image and material template image. No more than 6 entries.
     * @param integer $LogoAdd Switch indicating whether to add a synthesis logo to the fusion result image. Default value: 1.
1: add logo
0: do not add logo
Other values: add logo
It is recommended to use an obvious logo to indicate that the result image uses face fusion technology and is synthesized by AI.
     * @param LogoParam $LogoParam Logo content settings
By default, the text "Synthesized by AI" is added to the bottom right corner of the fusion result image. You can also use other texts.
     * @param FuseParam $FuseParam Fusion parameter.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }

        if (array_key_exists("MergeInfos",$param) and $param["MergeInfos"] !== null) {
            $this->MergeInfos = [];
            foreach ($param["MergeInfos"] as $key => $value){
                $obj = new MergeInfo();
                $obj->deserialize($value);
                array_push($this->MergeInfos, $obj);
            }
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("FuseParam",$param) and $param["FuseParam"] !== null) {
            $this->FuseParam = new FuseParam();
            $this->FuseParam->deserialize($param["FuseParam"]);
        }
    }
}
