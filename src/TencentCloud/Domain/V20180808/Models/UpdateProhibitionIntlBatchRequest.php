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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProhibitionIntlBatch request structure.
 *
 * @method array getDomains() Obtain The domain array.
 * @method void setDomains(array $Domains) Set The domain array.
 * @method boolean getStatus() Obtain Whether to enable update prohibition. Valid values: `true` (enable), `false` (disable).
 * @method void setStatus(boolean $Status) Set Whether to enable update prohibition. Valid values: `true` (enable), `false` (disable).
 */
class UpdateProhibitionIntlBatchRequest extends AbstractModel
{
    /**
     * @var array The domain array.
     */
    public $Domains;

    /**
     * @var boolean Whether to enable update prohibition. Valid values: `true` (enable), `false` (disable).
     */
    public $Status;

    /**
     * @param array $Domains The domain array.
     * @param boolean $Status Whether to enable update prohibition. Valid values: `true` (enable), `false` (disable).
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
