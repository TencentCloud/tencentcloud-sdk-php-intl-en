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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDashboard request structure.
 *
 * @method string getDashboardName() Obtain dashboard name
 * @method void setDashboardName(string $DashboardName) Set dashboard name
 * @method string getData() Obtain Dashboard configuration data
 * @method void setData(string $Data) Set Dashboard configuration data
 * @method array getTags() Obtain List of tag descriptions. When you specify this parameter, tags can be bound to the corresponding log topic at the same time. It supports up to 10 tag key-value pairs, and one resource can only be bound to one tag key.
 * @method void setTags(array $Tags) Set List of tag descriptions. When you specify this parameter, tags can be bound to the corresponding log topic at the same time. It supports up to 10 tag key-value pairs, and one resource can only be bound to one tag key.
 */
class CreateDashboardRequest extends AbstractModel
{
    /**
     * @var string dashboard name
     */
    public $DashboardName;

    /**
     * @var string Dashboard configuration data
     */
    public $Data;

    /**
     * @var array List of tag descriptions. When you specify this parameter, tags can be bound to the corresponding log topic at the same time. It supports up to 10 tag key-value pairs, and one resource can only be bound to one tag key.
     */
    public $Tags;

    /**
     * @param string $DashboardName dashboard name
     * @param string $Data Dashboard configuration data
     * @param array $Tags List of tag descriptions. When you specify this parameter, tags can be bound to the corresponding log topic at the same time. It supports up to 10 tag key-value pairs, and one resource can only be bound to one tag key.
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
        if (array_key_exists("DashboardName",$param) and $param["DashboardName"] !== null) {
            $this->DashboardName = $param["DashboardName"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
