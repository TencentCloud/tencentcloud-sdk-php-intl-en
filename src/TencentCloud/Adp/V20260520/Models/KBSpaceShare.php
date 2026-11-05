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
 * Knowledge base space share information
 *
 * @method boolean getIsSpaceShared() Obtain <p>Whether it has been referenced by other spaces</p>
 * @method void setIsSpaceShared(boolean $IsSpaceShared) Set <p>Whether it has been referenced by other spaces</p>
 * @method array getSharedSpaceList() Obtain <p>Referenced spatial information.</p>
 * @method void setSharedSpaceList(array $SharedSpaceList) Set <p>Referenced spatial information.</p>
 * @method KBShareStatus getSubStatus() Obtain <p>Shared state</p>
 * @method void setSubStatus(KBShareStatus $SubStatus) Set <p>Shared state</p>
 * @method boolean getEnable() Obtain <p>Whether operation is allowed</p>
 * @method void setEnable(boolean $Enable) Set <p>Whether operation is allowed</p>
 */
class KBSpaceShare extends AbstractModel
{
    /**
     * @var boolean <p>Whether it has been referenced by other spaces</p>
     */
    public $IsSpaceShared;

    /**
     * @var array <p>Referenced spatial information.</p>
     */
    public $SharedSpaceList;

    /**
     * @var KBShareStatus <p>Shared state</p>
     */
    public $SubStatus;

    /**
     * @var boolean <p>Whether operation is allowed</p>
     */
    public $Enable;

    /**
     * @param boolean $IsSpaceShared <p>Whether it has been referenced by other spaces</p>
     * @param array $SharedSpaceList <p>Referenced spatial information.</p>
     * @param KBShareStatus $SubStatus <p>Shared state</p>
     * @param boolean $Enable <p>Whether operation is allowed</p>
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
        if (array_key_exists("IsSpaceShared",$param) and $param["IsSpaceShared"] !== null) {
            $this->IsSpaceShared = $param["IsSpaceShared"];
        }

        if (array_key_exists("SharedSpaceList",$param) and $param["SharedSpaceList"] !== null) {
            $this->SharedSpaceList = [];
            foreach ($param["SharedSpaceList"] as $key => $value){
                $obj = new Identity();
                $obj->deserialize($value);
                array_push($this->SharedSpaceList, $obj);
            }
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = new KBShareStatus();
            $this->SubStatus->deserialize($param["SubStatus"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
