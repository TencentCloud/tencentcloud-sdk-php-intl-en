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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource details for log analysis.
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain Expiration time.
 * @method void setEndTime(string $EndTime) Set Expiration time.
 * @method integer getSourceType() Obtain 0: paid order; 1: trial use; 2: offered for free.
 * @method void setSourceType(integer $SourceType) Set 0: paid order; 1: trial use; 2: offered for free.
 * @method integer getInquireNum() Obtain purchase quantity
 * @method void setInquireNum(integer $InquireNum) Set purchase quantity
 */
class VasInfoResourceDetail extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string Expiration time.
     */
    public $EndTime;

    /**
     * @var integer 0: paid order; 1: trial use; 2: offered for free.
     */
    public $SourceType;

    /**
     * @var integer purchase quantity
     */
    public $InquireNum;

    /**
     * @param string $ResourceId Resource ID
     * @param string $StartTime Start time.
     * @param string $EndTime Expiration time.
     * @param integer $SourceType 0: paid order; 1: trial use; 2: offered for free.
     * @param integer $InquireNum purchase quantity
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }
    }
}
