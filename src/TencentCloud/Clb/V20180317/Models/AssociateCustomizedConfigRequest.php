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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateCustomizedConfig request structure.
 *
 * @method string getUconfigId() Obtain Configuration ID.
 * @method void setUconfigId(string $UconfigId) Set Configuration ID.
 * @method array getBindList() Obtain Associated server or location
 * @method void setBindList(array $BindList) Set Associated server or location
 */
class AssociateCustomizedConfigRequest extends AbstractModel
{
    /**
     * @var string Configuration ID.
     */
    public $UconfigId;

    /**
     * @var array Associated server or location
     */
    public $BindList;

    /**
     * @param string $UconfigId Configuration ID.
     * @param array $BindList Associated server or location
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
        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("BindList",$param) and $param["BindList"] !== null) {
            $this->BindList = [];
            foreach ($param["BindList"] as $key => $value){
                $obj = new BindItem();
                $obj->deserialize($value);
                array_push($this->BindList, $obj);
            }
        }
    }
}
