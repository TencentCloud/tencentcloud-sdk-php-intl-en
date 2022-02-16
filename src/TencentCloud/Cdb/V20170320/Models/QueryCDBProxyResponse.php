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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCDBProxy response structure.
 *
 * @method integer getCount() Obtain Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setCount(integer $Count) Set Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method array getProxyGroup() Obtain Proxy information
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyGroup(array $ProxyGroup) Set Proxy information
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class QueryCDBProxyResponse extends AbstractModel
{
    /**
     * @var integer Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Count;

    /**
     * @var array Proxy information
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyGroup;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Count Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param array $ProxyGroup Proxy information
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProxyGroup",$param) and $param["ProxyGroup"] !== null) {
            $this->ProxyGroup = [];
            foreach ($param["ProxyGroup"] as $key => $value){
                $obj = new ProxyGroups();
                $obj->deserialize($value);
                array_push($this->ProxyGroup, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
