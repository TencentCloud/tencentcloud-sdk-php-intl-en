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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User Rule Update Output Rule Subitem
 *
 * @method string getId() Obtain Feature serial number
 * @method void setId(string $Id) Set Feature serial number
 * @method integer getStatus() Obtain Rule switch
0: disabled
1: enabled
2: alarm only
 * @method void setStatus(integer $Status) Set Rule switch
0: disabled
1: enabled
2: alarm only
 * @method integer getReason() Obtain Reason for modification

0: none (Compatibility records are empty.)
1: avoidance of false positives due to business characteristics
2: reporting of rule-based false positives
3: grayscale release of core business rules
4: others
 * @method void setReason(integer $Reason) Set Reason for modification

0: none (Compatibility records are empty.)
1: avoidance of false positives due to business characteristics
2: reporting of rule-based false positives
3: grayscale release of core business rules
4: others
 */
class ReqUserRule extends AbstractModel
{
    /**
     * @var string Feature serial number
     */
    public $Id;

    /**
     * @var integer Rule switch
0: disabled
1: enabled
2: alarm only
     */
    public $Status;

    /**
     * @var integer Reason for modification

0: none (Compatibility records are empty.)
1: avoidance of false positives due to business characteristics
2: reporting of rule-based false positives
3: grayscale release of core business rules
4: others
     */
    public $Reason;

    /**
     * @param string $Id Feature serial number
     * @param integer $Status Rule switch
0: disabled
1: enabled
2: alarm only
     * @param integer $Reason Reason for modification

0: none (Compatibility records are empty.)
1: avoidance of false positives due to business characteristics
2: reporting of rule-based false positives
3: grayscale release of core business rules
4: others
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
