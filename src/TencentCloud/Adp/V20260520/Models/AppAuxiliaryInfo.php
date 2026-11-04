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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application auxiliary information - contains various auxiliary statuses and extended information (non-modifiable by users)
 *
 * @method AppAppeal getAppeal() Obtain Appeal information.
 * @method void setAppeal(AppAppeal $Appeal) Set Appeal information.
 * @method SearchResourceStatusInfo getSearchResourceStatus() Obtain Search for resource status
 * @method void setSearchResourceStatus(SearchResourceStatusInfo $SearchResourceStatus) Set Search for resource status
 * @method SpecialStatusInfo getSpecialStatusInfo() Obtain Special status information
 * @method void setSpecialStatusInfo(SpecialStatusInfo $SpecialStatusInfo) Set Special status information
 * @method AppSubStatusInfo getSubStatus() Obtain Sub-status information.
 * @method void setSubStatus(AppSubStatusInfo $SubStatus) Set Sub-status information.
 */
class AppAuxiliaryInfo extends AbstractModel
{
    /**
     * @var AppAppeal Appeal information.
     */
    public $Appeal;

    /**
     * @var SearchResourceStatusInfo Search for resource status
     */
    public $SearchResourceStatus;

    /**
     * @var SpecialStatusInfo Special status information
     */
    public $SpecialStatusInfo;

    /**
     * @var AppSubStatusInfo Sub-status information.
     */
    public $SubStatus;

    /**
     * @param AppAppeal $Appeal Appeal information.
     * @param SearchResourceStatusInfo $SearchResourceStatus Search for resource status
     * @param SpecialStatusInfo $SpecialStatusInfo Special status information
     * @param AppSubStatusInfo $SubStatus Sub-status information.
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
        if (array_key_exists("Appeal",$param) and $param["Appeal"] !== null) {
            $this->Appeal = new AppAppeal();
            $this->Appeal->deserialize($param["Appeal"]);
        }

        if (array_key_exists("SearchResourceStatus",$param) and $param["SearchResourceStatus"] !== null) {
            $this->SearchResourceStatus = new SearchResourceStatusInfo();
            $this->SearchResourceStatus->deserialize($param["SearchResourceStatus"]);
        }

        if (array_key_exists("SpecialStatusInfo",$param) and $param["SpecialStatusInfo"] !== null) {
            $this->SpecialStatusInfo = new SpecialStatusInfo();
            $this->SpecialStatusInfo->deserialize($param["SpecialStatusInfo"]);
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = new AppSubStatusInfo();
            $this->SubStatus->deserialize($param["SubStatus"]);
        }
    }
}
