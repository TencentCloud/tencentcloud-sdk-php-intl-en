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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Difference between the latest IP whitelist list and the current IP whitelist list
 *
 * @method IPWhitelist getLatestIPWhitelist() Obtain Latest IP whitelist list.
 * @method void setLatestIPWhitelist(IPWhitelist $LatestIPWhitelist) Set Latest IP whitelist list.
 * @method IPWhitelist getAddedIPWhitelist() Obtain Newly added part of the latest IP whitelist list compared with the current IP whitelist list.
 * @method void setAddedIPWhitelist(IPWhitelist $AddedIPWhitelist) Set Newly added part of the latest IP whitelist list compared with the current IP whitelist list.
 * @method IPWhitelist getRemovedIPWhitelist() Obtain The latest IP whitelist list has partially deleted entries compared with the current IP whitelist list.
 * @method void setRemovedIPWhitelist(IPWhitelist $RemovedIPWhitelist) Set The latest IP whitelist list has partially deleted entries compared with the current IP whitelist list.
 * @method IPWhitelist getNoChangeIPWhitelist() Obtain Unchanged part of the latest IP allowlist compared with the current IP allowlist.
 * @method void setNoChangeIPWhitelist(IPWhitelist $NoChangeIPWhitelist) Set Unchanged part of the latest IP allowlist compared with the current IP allowlist.
 */
class DiffIPWhitelist extends AbstractModel
{
    /**
     * @var IPWhitelist Latest IP whitelist list.
     */
    public $LatestIPWhitelist;

    /**
     * @var IPWhitelist Newly added part of the latest IP whitelist list compared with the current IP whitelist list.
     */
    public $AddedIPWhitelist;

    /**
     * @var IPWhitelist The latest IP whitelist list has partially deleted entries compared with the current IP whitelist list.
     */
    public $RemovedIPWhitelist;

    /**
     * @var IPWhitelist Unchanged part of the latest IP allowlist compared with the current IP allowlist.
     */
    public $NoChangeIPWhitelist;

    /**
     * @param IPWhitelist $LatestIPWhitelist Latest IP whitelist list.
     * @param IPWhitelist $AddedIPWhitelist Newly added part of the latest IP whitelist list compared with the current IP whitelist list.
     * @param IPWhitelist $RemovedIPWhitelist The latest IP whitelist list has partially deleted entries compared with the current IP whitelist list.
     * @param IPWhitelist $NoChangeIPWhitelist Unchanged part of the latest IP allowlist compared with the current IP allowlist.
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
        if (array_key_exists("LatestIPWhitelist",$param) and $param["LatestIPWhitelist"] !== null) {
            $this->LatestIPWhitelist = new IPWhitelist();
            $this->LatestIPWhitelist->deserialize($param["LatestIPWhitelist"]);
        }

        if (array_key_exists("AddedIPWhitelist",$param) and $param["AddedIPWhitelist"] !== null) {
            $this->AddedIPWhitelist = new IPWhitelist();
            $this->AddedIPWhitelist->deserialize($param["AddedIPWhitelist"]);
        }

        if (array_key_exists("RemovedIPWhitelist",$param) and $param["RemovedIPWhitelist"] !== null) {
            $this->RemovedIPWhitelist = new IPWhitelist();
            $this->RemovedIPWhitelist->deserialize($param["RemovedIPWhitelist"]);
        }

        if (array_key_exists("NoChangeIPWhitelist",$param) and $param["NoChangeIPWhitelist"] !== null) {
            $this->NoChangeIPWhitelist = new IPWhitelist();
            $this->NoChangeIPWhitelist->deserialize($param["NoChangeIPWhitelist"]);
        }
    }
}
