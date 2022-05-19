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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Format configuration of shipped log content
 *
 * @method string getFormat() Obtain Content format. Valid values: `json`, `csv`
 * @method void setFormat(string $Format) Set Content format. Valid values: `json`, `csv`
 * @method CsvInfo getCsv() Obtain CSV format content description
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCsv(CsvInfo $Csv) Set CSV format content description
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method JsonInfo getJson() Obtain JSON format content description
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setJson(JsonInfo $Json) Set JSON format content description
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method ParquetInfo getParquet() Obtain `Parquet` format description
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setParquet(ParquetInfo $Parquet) Set `Parquet` format description
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ContentInfo extends AbstractModel
{
    /**
     * @var string Content format. Valid values: `json`, `csv`
     */
    public $Format;

    /**
     * @var CsvInfo CSV format content description
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Csv;

    /**
     * @var JsonInfo JSON format content description
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Json;

    /**
     * @var ParquetInfo `Parquet` format description
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Parquet;

    /**
     * @param string $Format Content format. Valid values: `json`, `csv`
     * @param CsvInfo $Csv CSV format content description
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param JsonInfo $Json JSON format content description
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param ParquetInfo $Parquet `Parquet` format description
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Csv",$param) and $param["Csv"] !== null) {
            $this->Csv = new CsvInfo();
            $this->Csv->deserialize($param["Csv"]);
        }

        if (array_key_exists("Json",$param) and $param["Json"] !== null) {
            $this->Json = new JsonInfo();
            $this->Json->deserialize($param["Json"]);
        }

        if (array_key_exists("Parquet",$param) and $param["Parquet"] !== null) {
            $this->Parquet = new ParquetInfo();
            $this->Parquet->deserialize($param["Parquet"]);
        }
    }
}
