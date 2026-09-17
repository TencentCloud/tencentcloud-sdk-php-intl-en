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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method array getDrmTypes() Obtain 
 * @method void setDrmTypes(array $DrmTypes) Set 
 * @method SPEKEDrm getSPEKEDrm() Obtain 
 * @method void setSPEKEDrm(SPEKEDrm $SPEKEDrm) Set 
 */
class ThirdPartyDrmInfo extends AbstractModel
{
    /**
     * @var array 
     */
    public $DrmTypes;

    /**
     * @var SPEKEDrm 
     */
    public $SPEKEDrm;

    /**
     * @param array $DrmTypes 
     * @param SPEKEDrm $SPEKEDrm 
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
        if (array_key_exists("DrmTypes",$param) and $param["DrmTypes"] !== null) {
            $this->DrmTypes = $param["DrmTypes"];
        }

        if (array_key_exists("SPEKEDrm",$param) and $param["SPEKEDrm"] !== null) {
            $this->SPEKEDrm = new SPEKEDrm();
            $this->SPEKEDrm->deserialize($param["SPEKEDrm"]);
        }
    }
}
