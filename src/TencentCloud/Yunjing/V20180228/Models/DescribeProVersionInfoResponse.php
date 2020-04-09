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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProVersionInfo response structure.
 *
 * @method integer getPostPayCost() Obtain Fee on yesterday (pay-as-you-go)
 * @method void setPostPayCost(integer $PostPayCost) Set Fee on yesterday (pay-as-you-go)
 * @method boolean getIsAutoOpenProVersion() Obtain Whether CWP Pro is activated for new servers
 * @method void setIsAutoOpenProVersion(boolean $IsAutoOpenProVersion) Set Whether CWP Pro is activated for new servers
 * @method integer getProVersionNum() Obtain Number of servers on CWP Pro
 * @method void setProVersionNum(integer $ProVersionNum) Set Number of servers on CWP Pro
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeProVersionInfoResponse extends AbstractModel
{
    /**
     * @var integer Fee on yesterday (pay-as-you-go)
     */
    public $PostPayCost;

    /**
     * @var boolean Whether CWP Pro is activated for new servers
     */
    public $IsAutoOpenProVersion;

    /**
     * @var integer Number of servers on CWP Pro
     */
    public $ProVersionNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $PostPayCost Fee on yesterday (pay-as-you-go)
     * @param boolean $IsAutoOpenProVersion Whether CWP Pro is activated for new servers
     * @param integer $ProVersionNum Number of servers on CWP Pro
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PostPayCost",$param) and $param["PostPayCost"] !== null) {
            $this->PostPayCost = $param["PostPayCost"];
        }

        if (array_key_exists("IsAutoOpenProVersion",$param) and $param["IsAutoOpenProVersion"] !== null) {
            $this->IsAutoOpenProVersion = $param["IsAutoOpenProVersion"];
        }

        if (array_key_exists("ProVersionNum",$param) and $param["ProVersionNum"] !== null) {
            $this->ProVersionNum = $param["ProVersionNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
