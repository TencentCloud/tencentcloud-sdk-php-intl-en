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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteNonlocalLoginPlaces request structure.
 *
 * @method string getDelType() Obtain Method for deleting cross-region log-in events, available values are Ids, Ip, and All. The default is Ids.
 * @method void setDelType(string $DelType) Set Method for deleting cross-region log-in events, available values are Ids, Ip, and All. The default is Ids.
 * @method array getIds() Obtain Array of cross-region log-in event IDs. Required if DelType is Ids or DelType is not filled.
 * @method void setIds(array $Ids) Set Array of cross-region log-in event IDs. Required if DelType is Ids or DelType is not filled.
 * @method array getIp() Obtain IP of cross-region log-in event. Required if DelType is Ip.
 * @method void setIp(array $Ip) Set IP of cross-region log-in event. Required if DelType is Ip.
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 */
class DeleteNonlocalLoginPlacesRequest extends AbstractModel
{
    /**
     * @var string Method for deleting cross-region log-in events, available values are Ids, Ip, and All. The default is Ids.
     */
    public $DelType;

    /**
     * @var array Array of cross-region log-in event IDs. Required if DelType is Ids or DelType is not filled.
     */
    public $Ids;

    /**
     * @var array IP of cross-region log-in event. Required if DelType is Ip.
     */
    public $Ip;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @param string $DelType Method for deleting cross-region log-in events, available values are Ids, Ip, and All. The default is Ids.
     * @param array $Ids Array of cross-region log-in event IDs. Required if DelType is Ids or DelType is not filled.
     * @param array $Ip IP of cross-region log-in event. Required if DelType is Ip.
     * @param string $Uuid Host UUID
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
        if (array_key_exists("DelType",$param) and $param["DelType"] !== null) {
            $this->DelType = $param["DelType"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
