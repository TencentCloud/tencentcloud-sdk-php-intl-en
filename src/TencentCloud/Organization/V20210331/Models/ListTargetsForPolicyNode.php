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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Queries the list of targets associated with a specified SCP.
 *
 * @method integer getUin() Obtain SCP account UIN or node ID.
 * @method void setUin(integer $Uin) Set SCP account UIN or node ID.
 * @method integer getRelatedType() Obtain Association type. 1: node association; 2: user association.
 * @method void setRelatedType(integer $RelatedType) Set Association type. 1: node association; 2: user association.
 * @method string getName() Obtain Account or node name.
 * @method void setName(string $Name) Set Account or node name.
 * @method string getAddTime() Obtain Binding time.
 * @method void setAddTime(string $AddTime) Set Binding time.
 */
class ListTargetsForPolicyNode extends AbstractModel
{
    /**
     * @var integer SCP account UIN or node ID.
     */
    public $Uin;

    /**
     * @var integer Association type. 1: node association; 2: user association.
     */
    public $RelatedType;

    /**
     * @var string Account or node name.
     */
    public $Name;

    /**
     * @var string Binding time.
     */
    public $AddTime;

    /**
     * @param integer $Uin SCP account UIN or node ID.
     * @param integer $RelatedType Association type. 1: node association; 2: user association.
     * @param string $Name Account or node name.
     * @param string $AddTime Binding time.
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RelatedType",$param) and $param["RelatedType"] !== null) {
            $this->RelatedType = $param["RelatedType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }
    }
}
