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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Add the return data of the organizational unit interface
 *
 * @method string getOrganizationId() Obtain Organization ID
 * @method void setOrganizationId(string $OrganizationId) Set Organization ID
 * @method string getName() Obtain Organization name
 * @method void setName(string $Name) Set Organization name
 * @method string getParentId() Obtain Organization parent node ID
 * @method void setParentId(string $ParentId) Set Organization parent node ID
 * @method integer getLevel() Obtain Organization hierarchy
 * @method void setLevel(integer $Level) Set Organization hierarchy
 * @method integer getAppId() Obtain User ID.
 * @method void setAppId(integer $AppId) Set User ID.
 * @method string getParentIds() Obtain Organizational structure
 * @method void setParentIds(string $ParentIds) Set Organizational structure
 * @method integer getTotal() Obtain Total number of devices
 * @method void setTotal(integer $Total) Set Total number of devices
 * @method integer getOnline() Obtain Number of devices online
 * @method void setOnline(integer $Online) Set Number of devices online
 */
class AddOrgData extends AbstractModel
{
    /**
     * @var string Organization ID
     */
    public $OrganizationId;

    /**
     * @var string Organization name
     */
    public $Name;

    /**
     * @var string Organization parent node ID
     */
    public $ParentId;

    /**
     * @var integer Organization hierarchy
     */
    public $Level;

    /**
     * @var integer User ID.
     */
    public $AppId;

    /**
     * @var string Organizational structure
     */
    public $ParentIds;

    /**
     * @var integer Total number of devices
     */
    public $Total;

    /**
     * @var integer Number of devices online
     */
    public $Online;

    /**
     * @param string $OrganizationId Organization ID
     * @param string $Name Organization name
     * @param string $ParentId Organization parent node ID
     * @param integer $Level Organization hierarchy
     * @param integer $AppId User ID.
     * @param string $ParentIds Organizational structure
     * @param integer $Total Total number of devices
     * @param integer $Online Number of devices online
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ParentIds",$param) and $param["ParentIds"] !== null) {
            $this->ParentIds = $param["ParentIds"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }
    }
}
