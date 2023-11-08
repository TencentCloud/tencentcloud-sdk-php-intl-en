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
 * DeleteSharedCNAME request structure.
 *
 * @method string getZoneId() Obtain ID of the site to which the shared CNAME belongs.
 * @method void setZoneId(string $ZoneId) Set ID of the site to which the shared CNAME belongs.
 * @method string getSharedCNAME() Obtain The shared CNAME to be deleted
 * @method void setSharedCNAME(string $SharedCNAME) Set The shared CNAME to be deleted
 */
class DeleteSharedCNAMERequest extends AbstractModel
{
    /**
     * @var string ID of the site to which the shared CNAME belongs.
     */
    public $ZoneId;

    /**
     * @var string The shared CNAME to be deleted
     */
    public $SharedCNAME;

    /**
     * @param string $ZoneId ID of the site to which the shared CNAME belongs.
     * @param string $SharedCNAME The shared CNAME to be deleted
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }
    }
}
