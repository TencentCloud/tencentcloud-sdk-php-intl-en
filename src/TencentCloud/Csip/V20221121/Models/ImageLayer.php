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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image Layer Information
 *
 * @method integer getLayerIndex() Obtain <p>Image layer serial number</p>
 * @method void setLayerIndex(integer $LayerIndex) Set <p>Image layer serial number</p>
 * @method string getLayerId() Obtain <p>Image layer id</p>
 * @method void setLayerId(string $LayerId) Set <p>Image layer id</p>
 * @method string getLayerCmd() Obtain <p>Image layer command line</p>
 * @method void setLayerCmd(string $LayerCmd) Set <p>Image layer command line</p>
 * @method integer getSize() Obtain <p>Mirror layer size</p>
 * @method void setSize(integer $Size) Set <p>Mirror layer size</p>
 * @method integer getCriticalLevelVulCnt() Obtain <p>Critical vulnerability count</p>
 * @method void setCriticalLevelVulCnt(integer $CriticalLevelVulCnt) Set <p>Critical vulnerability count</p>
 * @method integer getHighLevelVulCnt() Obtain <p>High-risk vulnerability count</p>
 * @method void setHighLevelVulCnt(integer $HighLevelVulCnt) Set <p>High-risk vulnerability count</p>
 * @method integer getMediumLevelVulCnt() Obtain <p>medium-risk vulnerability count</p>
 * @method void setMediumLevelVulCnt(integer $MediumLevelVulCnt) Set <p>medium-risk vulnerability count</p>
 * @method integer getLowLevelVulCnt() Obtain <p>Number of low-risk vulnerabilities</p>
 * @method void setLowLevelVulCnt(integer $LowLevelVulCnt) Set <p>Number of low-risk vulnerabilities</p>
 * @method integer getVirusCnt() Obtain <p>Number of Trojans</p>
 * @method void setVirusCnt(integer $VirusCnt) Set <p>Number of Trojans</p>
 * @method integer getSensitiveCnt() Obtain <p>Number of sensitive information entries.</p>
 * @method void setSensitiveCnt(integer $SensitiveCnt) Set <p>Number of sensitive information entries.</p>
 * @method string getLayerCreateTime() Obtain <p>Image layer creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLayerCreateTime(string $LayerCreateTime) Set <p>Image layer creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 */
class ImageLayer extends AbstractModel
{
    /**
     * @var integer <p>Image layer serial number</p>
     */
    public $LayerIndex;

    /**
     * @var string <p>Image layer id</p>
     */
    public $LayerId;

    /**
     * @var string <p>Image layer command line</p>
     */
    public $LayerCmd;

    /**
     * @var integer <p>Mirror layer size</p>
     */
    public $Size;

    /**
     * @var integer <p>Critical vulnerability count</p>
     */
    public $CriticalLevelVulCnt;

    /**
     * @var integer <p>High-risk vulnerability count</p>
     */
    public $HighLevelVulCnt;

    /**
     * @var integer <p>medium-risk vulnerability count</p>
     */
    public $MediumLevelVulCnt;

    /**
     * @var integer <p>Number of low-risk vulnerabilities</p>
     */
    public $LowLevelVulCnt;

    /**
     * @var integer <p>Number of Trojans</p>
     */
    public $VirusCnt;

    /**
     * @var integer <p>Number of sensitive information entries.</p>
     */
    public $SensitiveCnt;

    /**
     * @var string <p>Image layer creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LayerCreateTime;

    /**
     * @param integer $LayerIndex <p>Image layer serial number</p>
     * @param string $LayerId <p>Image layer id</p>
     * @param string $LayerCmd <p>Image layer command line</p>
     * @param integer $Size <p>Mirror layer size</p>
     * @param integer $CriticalLevelVulCnt <p>Critical vulnerability count</p>
     * @param integer $HighLevelVulCnt <p>High-risk vulnerability count</p>
     * @param integer $MediumLevelVulCnt <p>medium-risk vulnerability count</p>
     * @param integer $LowLevelVulCnt <p>Number of low-risk vulnerabilities</p>
     * @param integer $VirusCnt <p>Number of Trojans</p>
     * @param integer $SensitiveCnt <p>Number of sensitive information entries.</p>
     * @param string $LayerCreateTime <p>Image layer creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
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
        if (array_key_exists("LayerIndex",$param) and $param["LayerIndex"] !== null) {
            $this->LayerIndex = $param["LayerIndex"];
        }

        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("LayerCmd",$param) and $param["LayerCmd"] !== null) {
            $this->LayerCmd = $param["LayerCmd"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("CriticalLevelVulCnt",$param) and $param["CriticalLevelVulCnt"] !== null) {
            $this->CriticalLevelVulCnt = $param["CriticalLevelVulCnt"];
        }

        if (array_key_exists("HighLevelVulCnt",$param) and $param["HighLevelVulCnt"] !== null) {
            $this->HighLevelVulCnt = $param["HighLevelVulCnt"];
        }

        if (array_key_exists("MediumLevelVulCnt",$param) and $param["MediumLevelVulCnt"] !== null) {
            $this->MediumLevelVulCnt = $param["MediumLevelVulCnt"];
        }

        if (array_key_exists("LowLevelVulCnt",$param) and $param["LowLevelVulCnt"] !== null) {
            $this->LowLevelVulCnt = $param["LowLevelVulCnt"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("SensitiveCnt",$param) and $param["SensitiveCnt"] !== null) {
            $this->SensitiveCnt = $param["SensitiveCnt"];
        }

        if (array_key_exists("LayerCreateTime",$param) and $param["LayerCreateTime"] !== null) {
            $this->LayerCreateTime = $param["LayerCreateTime"];
        }
    }
}
