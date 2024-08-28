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
 * DescribeVulTop request structure.
 *
 * @method integer getTop() Obtain Top servers by vulnerability risks. The specific number is in the range of 1 to 100.
 * @method void setTop(integer $Top) Set Top servers by vulnerability risks. The specific number is in the range of 1 to 100.
 * @method integer getVulCategory() Obtain 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability; 6: emergency vulnerability. If this parameter is left blank or set to 0, the statistical data of all these types of vulnerabilities is returned.
 * @method void setVulCategory(integer $VulCategory) Set 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability; 6: emergency vulnerability. If this parameter is left blank or set to 0, the statistical data of all these types of vulnerabilities is returned.
 * @method integer getIsFollowVul() Obtain Whether to count only focused vulnerabilities. 1: count only focused vulnerabilities; 0: count all vulnerabilities.
 * @method void setIsFollowVul(integer $IsFollowVul) Set Whether to count only focused vulnerabilities. 1: count only focused vulnerabilities; 0: count all vulnerabilities.
 */
class DescribeVulTopRequest extends AbstractModel
{
    /**
     * @var integer Top servers by vulnerability risks. The specific number is in the range of 1 to 100.
     */
    public $Top;

    /**
     * @var integer 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability; 6: emergency vulnerability. If this parameter is left blank or set to 0, the statistical data of all these types of vulnerabilities is returned.
     */
    public $VulCategory;

    /**
     * @var integer Whether to count only focused vulnerabilities. 1: count only focused vulnerabilities; 0: count all vulnerabilities.
     */
    public $IsFollowVul;

    /**
     * @param integer $Top Top servers by vulnerability risks. The specific number is in the range of 1 to 100.
     * @param integer $VulCategory 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability; 6: emergency vulnerability. If this parameter is left blank or set to 0, the statistical data of all these types of vulnerabilities is returned.
     * @param integer $IsFollowVul Whether to count only focused vulnerabilities. 1: count only focused vulnerabilities; 0: count all vulnerabilities.
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
        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("IsFollowVul",$param) and $param["IsFollowVul"] !== null) {
            $this->IsFollowVul = $param["IsFollowVul"];
        }
    }
}
