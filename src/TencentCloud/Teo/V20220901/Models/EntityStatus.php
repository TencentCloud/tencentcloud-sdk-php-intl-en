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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Status of domain names bound with this template.
 *
 * @method string getEntity() Obtain Instance name. Only subdomain names are supported.
 * @method void setEntity(string $Entity) Set Instance name. Only subdomain names are supported.
 * @method string getStatus() Obtain Instance configuration status. Values:
<li>`online`: Configuration has taken effect;</li><li>`fail`: Configuration failed;</li><li>`process`: Configuration is being delivered. </li>
 * @method void setStatus(string $Status) Set Instance configuration status. Values:
<li>`online`: Configuration has taken effect;</li><li>`fail`: Configuration failed;</li><li>`process`: Configuration is being delivered. </li>
 * @method string getMessage() Obtain Message returned after the operation completed. 
 * @method void setMessage(string $Message) Set Message returned after the operation completed. 
 */
class EntityStatus extends AbstractModel
{
    /**
     * @var string Instance name. Only subdomain names are supported.
     */
    public $Entity;

    /**
     * @var string Instance configuration status. Values:
<li>`online`: Configuration has taken effect;</li><li>`fail`: Configuration failed;</li><li>`process`: Configuration is being delivered. </li>
     */
    public $Status;

    /**
     * @var string Message returned after the operation completed. 
     */
    public $Message;

    /**
     * @param string $Entity Instance name. Only subdomain names are supported.
     * @param string $Status Instance configuration status. Values:
<li>`online`: Configuration has taken effect;</li><li>`fail`: Configuration failed;</li><li>`process`: Configuration is being delivered. </li>
     * @param string $Message Message returned after the operation completed. 
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
        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
