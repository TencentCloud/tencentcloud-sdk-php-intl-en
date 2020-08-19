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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDirectConnects response structure.
 *
 * @method array getDirectConnectSet() Obtain List of connections.
 * @method void setDirectConnectSet(array $DirectConnectSet) Set List of connections.
 * @method integer getTotalCount() Obtain Number of eligible connection lists.
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible connection lists.
 * @method boolean getAllSignLaw() Obtain Whether all connections under the account have the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setAllSignLaw(boolean $AllSignLaw) Set Whether all connections under the account have the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDirectConnectsResponse extends AbstractModel
{
    /**
     * @var array List of connections.
     */
    public $DirectConnectSet;

    /**
     * @var integer Number of eligible connection lists.
     */
    public $TotalCount;

    /**
     * @var boolean Whether all connections under the account have the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $AllSignLaw;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DirectConnectSet List of connections.
     * @param integer $TotalCount Number of eligible connection lists.
     * @param boolean $AllSignLaw Whether all connections under the account have the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("DirectConnectSet",$param) and $param["DirectConnectSet"] !== null) {
            $this->DirectConnectSet = [];
            foreach ($param["DirectConnectSet"] as $key => $value){
                $obj = new DirectConnect();
                $obj->deserialize($value);
                array_push($this->DirectConnectSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AllSignLaw",$param) and $param["AllSignLaw"] !== null) {
            $this->AllSignLaw = $param["AllSignLaw"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
