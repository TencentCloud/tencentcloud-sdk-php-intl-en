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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protected resource
 *
 * @method integer getAppId() Obtain User APPID
 * @method void setAppId(integer $AppId) Set User APPID
 * @method string getZoneId() Obtain Top-level domain name
 * @method void setZoneId(string $ZoneId) Set Top-level domain name
 * @method string getEntity() Obtain Second-level domain name
 * @method void setEntity(string $Entity) Set Second-level domain name
 * @method string getEntityType() Obtain Type of protected resource. Values: `domain` and `application`.
 * @method void setEntityType(string $EntityType) Set Type of protected resource. Values: `domain` and `application`.
 */
class SecurityEntity extends AbstractModel
{
    /**
     * @var integer User APPID
     */
    public $AppId;

    /**
     * @var string Top-level domain name
     */
    public $ZoneId;

    /**
     * @var string Second-level domain name
     */
    public $Entity;

    /**
     * @var string Type of protected resource. Values: `domain` and `application`.
     */
    public $EntityType;

    /**
     * @param integer $AppId User APPID
     * @param string $ZoneId Top-level domain name
     * @param string $Entity Second-level domain name
     * @param string $EntityType Type of protected resource. Values: `domain` and `application`.
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }
    }
}
