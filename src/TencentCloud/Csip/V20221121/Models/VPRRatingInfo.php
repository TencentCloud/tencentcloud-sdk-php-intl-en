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
 * VRP rating information
 *
 * @method string getResult() Obtain VPR rating result
Enumeration value:
URGENT: Immediate repair
SUGGESTED: Suggested repairs
DEFERRABLE: Deferrable repair
 * @method void setResult(string $Result) Set VPR rating result
Enumeration value:
URGENT: Immediate repair
SUGGESTED: Suggested repairs
DEFERRABLE: Deferrable repair
 * @method string getRemark() Obtain Rating description
 * @method void setRemark(string $Remark) Set Rating description
 * @method array getStage() Obtain List of stage rating details
 * @method void setStage(array $Stage) Set List of stage rating details
 */
class VPRRatingInfo extends AbstractModel
{
    /**
     * @var string VPR rating result
Enumeration value:
URGENT: Immediate repair
SUGGESTED: Suggested repairs
DEFERRABLE: Deferrable repair
     */
    public $Result;

    /**
     * @var string Rating description
     */
    public $Remark;

    /**
     * @var array List of stage rating details
     */
    public $Stage;

    /**
     * @param string $Result VPR rating result
Enumeration value:
URGENT: Immediate repair
SUGGESTED: Suggested repairs
DEFERRABLE: Deferrable repair
     * @param string $Remark Rating description
     * @param array $Stage List of stage rating details
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = [];
            foreach ($param["Stage"] as $key => $value){
                $obj = new VPRRatingStage();
                $obj->deserialize($value);
                array_push($this->Stage, $obj);
            }
        }
    }
}
