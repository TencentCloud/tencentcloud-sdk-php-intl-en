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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmAccessRecord request structure.
 *
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getId() Obtain Source IP
 * @method void setId(array $Id) Set Source IP
 * @method string getView() Obtain View. ip or instance.
 * @method void setView(string $View) Set View. ip or instance.
 * @method integer getNoted() Obtain Read tag. 1 - Read
 * @method void setNoted(integer $Noted) Set Read tag. 1 - Read
 */
class ModifyDspmAccessRecordRequest extends AbstractModel
{
    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Source IP
     */
    public $Id;

    /**
     * @var string View. ip or instance.
     */
    public $View;

    /**
     * @var integer Read tag. 1 - Read
     */
    public $Noted;

    /**
     * @param array $MemberId Group Account Member ID
     * @param array $Id Source IP
     * @param string $View View. ip or instance.
     * @param integer $Noted Read tag. 1 - Read
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = [];
            foreach ($param["Id"] as $key => $value){
                $obj = new DspmAccessRecordId();
                $obj->deserialize($value);
                array_push($this->Id, $obj);
            }
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Noted",$param) and $param["Noted"] !== null) {
            $this->Noted = $param["Noted"];
        }
    }
}
