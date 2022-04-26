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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned authorization information.
 *
 * @method string getAppId() Obtain Unique application ID.
 * @method void setAppId(string $AppId) Set Unique application ID.
 * @method string getAppName() Obtain Application name.
 * @method void setAppName(string $AppName) Set Application name.
 * @method string getEntityName() Obtain Type name.
 * @method void setEntityName(string $EntityName) Set Type name.
 * @method string getEntityId() Obtain Unique type ID.
 * @method void setEntityId(string $EntityId) Set Unique type ID.
 * @method string getLastModifiedDate() Obtain Last update time in ISO 8601 format.
 * @method void setLastModifiedDate(string $LastModifiedDate) Set Last update time in ISO 8601 format.
 * @method string getAuthorizationId() Obtain Unique authorization type ID.
 * @method void setAuthorizationId(string $AuthorizationId) Set Unique authorization type ID.
 */
class AuthorizationInfo extends AbstractModel
{
    /**
     * @var string Unique application ID.
     */
    public $AppId;

    /**
     * @var string Application name.
     */
    public $AppName;

    /**
     * @var string Type name.
     */
    public $EntityName;

    /**
     * @var string Unique type ID.
     */
    public $EntityId;

    /**
     * @var string Last update time in ISO 8601 format.
     */
    public $LastModifiedDate;

    /**
     * @var string Unique authorization type ID.
     */
    public $AuthorizationId;

    /**
     * @param string $AppId Unique application ID.
     * @param string $AppName Application name.
     * @param string $EntityName Type name.
     * @param string $EntityId Unique type ID.
     * @param string $LastModifiedDate Last update time in ISO 8601 format.
     * @param string $AuthorizationId Unique authorization type ID.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("EntityName",$param) and $param["EntityName"] !== null) {
            $this->EntityName = $param["EntityName"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("AuthorizationId",$param) and $param["AuthorizationId"] !== null) {
            $this->AuthorizationId = $param["AuthorizationId"];
        }
    }
}
