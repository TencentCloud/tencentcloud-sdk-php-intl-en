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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The connection groups from which the statistics can be derived, and the connection information.
 *
 * @method string getGroupId() Obtain Connection group ID
 * @method void setGroupId(string $GroupId) Set Connection group ID
 * @method string getGroupName() Obtain Connection group name
 * @method void setGroupName(string $GroupName) Set Connection group name
 * @method array getProxySet() Obtain List of connections of a connection group
 * @method void setProxySet(array $ProxySet) Set List of connections of a connection group
 */
class GroupStatisticsInfo extends AbstractModel
{
    /**
     * @var string Connection group ID
     */
    public $GroupId;

    /**
     * @var string Connection group name
     */
    public $GroupName;

    /**
     * @var array List of connections of a connection group
     */
    public $ProxySet;

    /**
     * @param string $GroupId Connection group ID
     * @param string $GroupName Connection group name
     * @param array $ProxySet List of connections of a connection group
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ProxySet",$param) and $param["ProxySet"] !== null) {
            $this->ProxySet = [];
            foreach ($param["ProxySet"] as $key => $value){
                $obj = new ProxySimpleInfo();
                $obj->deserialize($value);
                array_push($this->ProxySet, $obj);
            }
        }
    }
}
