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
 * Differences between the newest and existing intermediate IPs
 *
 * @method IPWhitelist getLatestIPWhitelist() Obtain The latest intermediate IPs.
 * @method void setLatestIPWhitelist(IPWhitelist $LatestIPWhitelist) Set The latest intermediate IPs.
 * @method IPWhitelist getAddedIPWhitelist() Obtain The intermediate IPs added to the existing list.
 * @method void setAddedIPWhitelist(IPWhitelist $AddedIPWhitelist) Set The intermediate IPs added to the existing list.
 * @method IPWhitelist getRemovedIPWhitelist() Obtain The intermediate IPs removed from the existing list.
 * @method void setRemovedIPWhitelist(IPWhitelist $RemovedIPWhitelist) Set The intermediate IPs removed from the existing list.
 * @method IPWhitelist getNoChangeIPWhitelist() Obtain The intermediate IPs that remain unchanged.
 * @method void setNoChangeIPWhitelist(IPWhitelist $NoChangeIPWhitelist) Set The intermediate IPs that remain unchanged.
 */
class DiffIPWhitelist extends AbstractModel
{
    /**
     * @var IPWhitelist The latest intermediate IPs.
     */
    public $LatestIPWhitelist;

    /**
     * @var IPWhitelist The intermediate IPs added to the existing list.
     */
    public $AddedIPWhitelist;

    /**
     * @var IPWhitelist The intermediate IPs removed from the existing list.
     */
    public $RemovedIPWhitelist;

    /**
     * @var IPWhitelist The intermediate IPs that remain unchanged.
     */
    public $NoChangeIPWhitelist;

    /**
     * @param IPWhitelist $LatestIPWhitelist The latest intermediate IPs.
     * @param IPWhitelist $AddedIPWhitelist The intermediate IPs added to the existing list.
     * @param IPWhitelist $RemovedIPWhitelist The intermediate IPs removed from the existing list.
     * @param IPWhitelist $NoChangeIPWhitelist The intermediate IPs that remain unchanged.
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
