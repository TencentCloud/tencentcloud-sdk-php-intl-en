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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trend information of security events at runtime
 *
 * @method array getImageRiskSet() Obtain List of trends
 * @method void setImageRiskSet(array $ImageRiskSet) Set List of trends
 * @method string getImageRiskType() Obtain Risk type:
`IRT_VULNERABILITY`: Vulnerability.
`IRT_MALWARE_VIRUS`: Virus and trojan.
`IRT_RISK`: Sensitive data.
 * @method void setImageRiskType(string $ImageRiskType) Set Risk type:
`IRT_VULNERABILITY`: Vulnerability.
`IRT_MALWARE_VIRUS`: Virus and trojan.
`IRT_RISK`: Sensitive data.
 */
class ImageRiskTendencyInfo extends AbstractModel
{
    /**
     * @var array List of trends
     */
    public $ImageRiskSet;

    /**
     * @var string Risk type:
`IRT_VULNERABILITY`: Vulnerability.
`IRT_MALWARE_VIRUS`: Virus and trojan.
`IRT_RISK`: Sensitive data.
     */
    public $ImageRiskType;

    /**
     * @param array $ImageRiskSet List of trends
     * @param string $ImageRiskType Risk type:
`IRT_VULNERABILITY`: Vulnerability.
`IRT_MALWARE_VIRUS`: Virus and trojan.
`IRT_RISK`: Sensitive data.
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
        if (array_key_exists("ImageRiskSet",$param) and $param["ImageRiskSet"] !== null) {
            $this->ImageRiskSet = [];
            foreach ($param["ImageRiskSet"] as $key => $value){
                $obj = new RunTimeTendencyInfo();
                $obj->deserialize($value);
                array_push($this->ImageRiskSet, $obj);
            }
        }

        if (array_key_exists("ImageRiskType",$param) and $param["ImageRiskType"] !== null) {
            $this->ImageRiskType = $param["ImageRiskType"];
        }
    }
}
