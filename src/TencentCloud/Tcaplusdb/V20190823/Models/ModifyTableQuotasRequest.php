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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTableQuotas request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where the table to be scaled resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where the table to be scaled resides
 * @method array getTableQuotas() Obtain List of quotas of tables selected for modification
 * @method void setTableQuotas(array $TableQuotas) Set List of quotas of tables selected for modification
 */
class ModifyTableQuotasRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where the table to be scaled resides
     */
    public $ClusterId;

    /**
     * @var array List of quotas of tables selected for modification
     */
    public $TableQuotas;

    /**
     * @param string $ClusterId ID of the cluster where the table to be scaled resides
     * @param array $TableQuotas List of quotas of tables selected for modification
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableQuotas",$param) and $param["TableQuotas"] !== null) {
            $this->TableQuotas = [];
            foreach ($param["TableQuotas"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->TableQuotas, $obj);
            }
        }
    }
}
