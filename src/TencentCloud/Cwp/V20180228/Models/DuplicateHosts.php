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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch add to allowlists
 *
 * @method string getQuuid() Obtain Quuid
 * @method void setQuuid(string $Quuid) Set Quuid
 * @method string getUuid() Obtain Uuid
 * @method void setUuid(string $Uuid) Set Uuid
 * @method integer getId() Obtain Id
 * @method void setId(integer $Id) Set Id
 */
class DuplicateHosts extends AbstractModel
{
    /**
     * @var string Quuid
     */
    public $Quuid;

    /**
     * @var string Uuid
     */
    public $Uuid;

    /**
     * @var integer Id
     */
    public $Id;

    /**
     * @param string $Quuid Quuid
     * @param string $Uuid Uuid
     * @param integer $Id Id
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
