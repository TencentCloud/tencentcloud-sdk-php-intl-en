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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output parameters of `ModifyAppStatus`
 *
 * @method integer getBizId() Obtain GME application ID
 * @method void setBizId(integer $BizId) Set GME application ID
 * @method string getStatus() Obtain Application status. Valid values: `open`, `close`.
 * @method void setStatus(string $Status) Set Application status. Valid values: `open`, `close`.
 */
class ModifyAppStatusResp extends AbstractModel
{
    /**
     * @var integer GME application ID
     */
    public $BizId;

    /**
     * @var string Application status. Valid values: `open`, `close`.
     */
    public $Status;

    /**
     * @param integer $BizId GME application ID
     * @param string $Status Application status. Valid values: `open`, `close`.
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
