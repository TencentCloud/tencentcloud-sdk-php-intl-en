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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos permission information
 *
 * @method string getPermissionSource() Obtain Permission source
 * @method void setPermissionSource(string $PermissionSource) Set Permission source
 * @method string getPermissionContent() Obtain Permission content
 * @method void setPermissionContent(string $PermissionContent) Set Permission content
 * @method string getGrantResource() Obtain Authorize resources
 * @method void setGrantResource(string $GrantResource) Set Authorize resources
 * @method string getGrantAction() Obtain Authorize the action
 * @method void setGrantAction(string $GrantAction) Set Authorize the action
 * @method string getGrantCondition() Obtain Authorization conditions
 * @method void setGrantCondition(string $GrantCondition) Set Authorization conditions
 */
class CosPermissionInfo extends AbstractModel
{
    /**
     * @var string Permission source
     */
    public $PermissionSource;

    /**
     * @var string Permission content
     */
    public $PermissionContent;

    /**
     * @var string Authorize resources
     */
    public $GrantResource;

    /**
     * @var string Authorize the action
     */
    public $GrantAction;

    /**
     * @var string Authorization conditions
     */
    public $GrantCondition;

    /**
     * @param string $PermissionSource Permission source
     * @param string $PermissionContent Permission content
     * @param string $GrantResource Authorize resources
     * @param string $GrantAction Authorize the action
     * @param string $GrantCondition Authorization conditions
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
        if (array_key_exists("PermissionSource",$param) and $param["PermissionSource"] !== null) {
            $this->PermissionSource = $param["PermissionSource"];
        }

        if (array_key_exists("PermissionContent",$param) and $param["PermissionContent"] !== null) {
            $this->PermissionContent = $param["PermissionContent"];
        }

        if (array_key_exists("GrantResource",$param) and $param["GrantResource"] !== null) {
            $this->GrantResource = $param["GrantResource"];
        }

        if (array_key_exists("GrantAction",$param) and $param["GrantAction"] !== null) {
            $this->GrantAction = $param["GrantAction"];
        }

        if (array_key_exists("GrantCondition",$param) and $param["GrantCondition"] !== null) {
            $this->GrantCondition = $param["GrantCondition"];
        }
    }
}
