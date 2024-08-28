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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLicenseOrder request structure.
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method integer getInquireNum() Obtain Expected value. If the current value is 10, fill in a larger value for scale-out, a smaller value for scale-down (the expected value must be no less than the usage value during scale-down), or the same value for no change.
 * @method void setInquireNum(integer $InquireNum) Set Expected value. If the current value is 10, fill in a larger value for scale-out, a smaller value for scale-down (the expected value must be no less than the usage value during scale-down), or the same value for no change.
 * @method integer getProjectId() Obtain Project ID. Fill in the original value for no change.
 * @method void setProjectId(integer $ProjectId) Set Project ID. Fill in the original value for no change.
 * @method string getAlias() Obtain Resource alias. Fill in the original value for no change.
 * @method void setAlias(string $Alias) Set Resource alias. Fill in the original value for no change.
 */
class ModifyLicenseOrderRequest extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var integer Expected value. If the current value is 10, fill in a larger value for scale-out, a smaller value for scale-down (the expected value must be no less than the usage value during scale-down), or the same value for no change.
     */
    public $InquireNum;

    /**
     * @var integer Project ID. Fill in the original value for no change.
     */
    public $ProjectId;

    /**
     * @var string Resource alias. Fill in the original value for no change.
     */
    public $Alias;

    /**
     * @param string $ResourceId Resource ID
     * @param integer $InquireNum Expected value. If the current value is 10, fill in a larger value for scale-out, a smaller value for scale-down (the expected value must be no less than the usage value during scale-down), or the same value for no change.
     * @param integer $ProjectId Project ID. Fill in the original value for no change.
     * @param string $Alias Resource alias. Fill in the original value for no change.
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

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
