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
 * DescribeComponentInfo response structure.
 *
 * @method integer getId() Obtain Component ID.
 * @method void setId(integer $Id) Set Component ID.
 * @method string getComponentName() Obtain Component name.
 * @method void setComponentName(string $ComponentName) Set Component name.
 * @method string getComponentType() Obtain Component type.
<li>WEB: web component</li>
<li>SYSTEM: system component</li>
 * @method void setComponentType(string $ComponentType) Set Component type.
<li>WEB: web component</li>
<li>SYSTEM: system component</li>
 * @method string getHomepage() Obtain Component's official website.
 * @method void setHomepage(string $Homepage) Set Component's official website.
 * @method string getDescription() Obtain Component description.
 * @method void setDescription(string $Description) Set Component description.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeComponentInfoResponse extends AbstractModel
{
    /**
     * @var integer Component ID.
     */
    public $Id;

    /**
     * @var string Component name.
     */
    public $ComponentName;

    /**
     * @var string Component type.
<li>WEB: web component</li>
<li>SYSTEM: system component</li>
     */
    public $ComponentType;

    /**
     * @var string Component's official website.
     */
    public $Homepage;

    /**
     * @var string Component description.
     */
    public $Description;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Id Component ID.
     * @param string $ComponentName Component name.
     * @param string $ComponentType Component type.
<li>WEB: web component</li>
<li>SYSTEM: system component</li>
     * @param string $Homepage Component's official website.
     * @param string $Description Component description.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("Homepage",$param) and $param["Homepage"] !== null) {
            $this->Homepage = $param["Homepage"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
