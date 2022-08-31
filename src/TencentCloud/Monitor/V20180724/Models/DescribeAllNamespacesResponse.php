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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllNamespaces response structure.
 *
 * @method CommonNamespace getQceNamespaces() Obtain Alarm policy type of Tencent Cloud service (disused)
 * @method void setQceNamespaces(CommonNamespace $QceNamespaces) Set Alarm policy type of Tencent Cloud service (disused)
 * @method CommonNamespace getCustomNamespaces() Obtain Other alarm policy type (disused)
 * @method void setCustomNamespaces(CommonNamespace $CustomNamespaces) Set Other alarm policy type (disused)
 * @method array getQceNamespacesNew() Obtain Alarm policy type of Tencent Cloud service
 * @method void setQceNamespacesNew(array $QceNamespacesNew) Set Alarm policy type of Tencent Cloud service
 * @method array getCustomNamespacesNew() Obtain Other alarm policy type (not supported currently)
 * @method void setCustomNamespacesNew(array $CustomNamespacesNew) Set Other alarm policy type (not supported currently)
 * @method array getCommonNamespaces() Obtain General alarm policy type, including TAPM, RUM, and CAT.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCommonNamespaces(array $CommonNamespaces) Set General alarm policy type, including TAPM, RUM, and CAT.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAllNamespacesResponse extends AbstractModel
{
    /**
     * @var CommonNamespace Alarm policy type of Tencent Cloud service (disused)
     */
    public $QceNamespaces;

    /**
     * @var CommonNamespace Other alarm policy type (disused)
     */
    public $CustomNamespaces;

    /**
     * @var array Alarm policy type of Tencent Cloud service
     */
    public $QceNamespacesNew;

    /**
     * @var array Other alarm policy type (not supported currently)
     */
    public $CustomNamespacesNew;

    /**
     * @var array General alarm policy type, including TAPM, RUM, and CAT.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CommonNamespaces;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param CommonNamespace $QceNamespaces Alarm policy type of Tencent Cloud service (disused)
     * @param CommonNamespace $CustomNamespaces Other alarm policy type (disused)
     * @param array $QceNamespacesNew Alarm policy type of Tencent Cloud service
     * @param array $CustomNamespacesNew Other alarm policy type (not supported currently)
     * @param array $CommonNamespaces General alarm policy type, including TAPM, RUM, and CAT.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("QceNamespaces",$param) and $param["QceNamespaces"] !== null) {
            $this->QceNamespaces = new CommonNamespace();
            $this->QceNamespaces->deserialize($param["QceNamespaces"]);
        }

        if (array_key_exists("CustomNamespaces",$param) and $param["CustomNamespaces"] !== null) {
            $this->CustomNamespaces = new CommonNamespace();
            $this->CustomNamespaces->deserialize($param["CustomNamespaces"]);
        }

        if (array_key_exists("QceNamespacesNew",$param) and $param["QceNamespacesNew"] !== null) {
            $this->QceNamespacesNew = [];
            foreach ($param["QceNamespacesNew"] as $key => $value){
                $obj = new CommonNamespace();
                $obj->deserialize($value);
                array_push($this->QceNamespacesNew, $obj);
            }
        }

        if (array_key_exists("CustomNamespacesNew",$param) and $param["CustomNamespacesNew"] !== null) {
            $this->CustomNamespacesNew = [];
            foreach ($param["CustomNamespacesNew"] as $key => $value){
                $obj = new CommonNamespace();
                $obj->deserialize($value);
                array_push($this->CustomNamespacesNew, $obj);
            }
        }

        if (array_key_exists("CommonNamespaces",$param) and $param["CommonNamespaces"] !== null) {
            $this->CommonNamespaces = [];
            foreach ($param["CommonNamespaces"] as $key => $value){
                $obj = new CommonNamespaceNew();
                $obj->deserialize($value);
                array_push($this->CommonNamespaces, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
