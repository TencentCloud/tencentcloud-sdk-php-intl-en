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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SeriesInfos type
 *
 * @method array getColumns() Obtain Data columns
 * @method void setColumns(array $Columns) Set Data columns
 * @method array getValues() Obtain Data values
 * @method void setValues(array $Values) Set Data values
 */
class SeriesInfos extends AbstractModel
{
    /**
     * @var array Data columns
     */
    public $Columns;

    /**
     * @var array Data values
     */
    public $Values;

    /**
     * @param array $Columns Data columns
     * @param array $Values Data values
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
        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new RowValues();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }
    }
}
