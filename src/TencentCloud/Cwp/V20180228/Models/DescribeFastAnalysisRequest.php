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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFastAnalysis request structure.
 *
 * @method integer getFrom() Obtain Start time. Unit: ms.
 * @method void setFrom(integer $From) Set Start time. Unit: ms.
 * @method integer getTo() Obtain End time. Unit: ms.
 * @method void setTo(integer $To) Set End time. Unit: ms.
 * @method string getQuery() Obtain Query statement, up to 4096 in statement length
 * @method void setQuery(string $Query) Set Query statement, up to 4096 in statement length
 * @method string getFieldName() Obtain Log field name
 * @method void setFieldName(string $FieldName) Set Log field name
 */
class DescribeFastAnalysisRequest extends AbstractModel
{
    /**
     * @var integer Start time. Unit: ms.
     */
    public $From;

    /**
     * @var integer End time. Unit: ms.
     */
    public $To;

    /**
     * @var string Query statement, up to 4096 in statement length
     */
    public $Query;

    /**
     * @var string Log field name
     */
    public $FieldName;

    /**
     * @param integer $From Start time. Unit: ms.
     * @param integer $To End time. Unit: ms.
     * @param string $Query Query statement, up to 4096 in statement length
     * @param string $FieldName Log field name
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }
    }
}
