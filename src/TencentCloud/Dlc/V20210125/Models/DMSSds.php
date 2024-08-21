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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of metadata storage attributes
 *
 * @method string getLocation() Obtain Storage address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Storage address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInputFormat() Obtain Input format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInputFormat(string $InputFormat) Set Input format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputFormat() Obtain Output format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputFormat(string $OutputFormat) Set Output format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNumBuckets() Obtain Number of buckets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumBuckets(integer $NumBuckets) Set Number of buckets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCompressed() Obtain Whether it is compressed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompressed(boolean $Compressed) Set Whether it is compressed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getStoredAsSubDirectories() Obtain Whether it has a subdirectory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStoredAsSubDirectories(boolean $StoredAsSubDirectories) Set Whether it has a subdirectory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSerdeLib() Obtain Serialization lib
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSerdeLib(string $SerdeLib) Set Serialization lib
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSerdeName() Obtain Serialization name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSerdeName(string $SerdeName) Set Serialization name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBucketCols() Obtain Bucket name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucketCols(array $BucketCols) Set Bucket name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSerdeParams() Obtain Serialization parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSerdeParams(array $SerdeParams) Set Serialization parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getParams() Obtain Additional Parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParams(array $Params) Set Additional Parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DMSColumnOrder getSortCols() Obtain Column sorting (Expired)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSortCols(DMSColumnOrder $SortCols) Set Column sorting (Expired)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCols() Obtain Column
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCols(array $Cols) Set Column
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSortColumns() Obtain Column sorting field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSortColumns(array $SortColumns) Set Column sorting field
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DMSSds extends AbstractModel
{
    /**
     * @var string Storage address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var string Input format
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InputFormat;

    /**
     * @var string Output format
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputFormat;

    /**
     * @var integer Number of buckets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NumBuckets;

    /**
     * @var boolean Whether it is compressed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Compressed;

    /**
     * @var boolean Whether it has a subdirectory
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StoredAsSubDirectories;

    /**
     * @var string Serialization lib
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SerdeLib;

    /**
     * @var string Serialization name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SerdeName;

    /**
     * @var array Bucket name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BucketCols;

    /**
     * @var array Serialization parameters
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SerdeParams;

    /**
     * @var array Additional Parameters
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Params;

    /**
     * @var DMSColumnOrder Column sorting (Expired)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SortCols;

    /**
     * @var array Column
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cols;

    /**
     * @var array Column sorting field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SortColumns;

    /**
     * @param string $Location Storage address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InputFormat Input format
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputFormat Output format
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NumBuckets Number of buckets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Compressed Whether it is compressed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $StoredAsSubDirectories Whether it has a subdirectory
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SerdeLib Serialization lib
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SerdeName Serialization name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BucketCols Bucket name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SerdeParams Serialization parameters
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Params Additional Parameters
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DMSColumnOrder $SortCols Column sorting (Expired)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Cols Column
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SortColumns Column sorting field
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("InputFormat",$param) and $param["InputFormat"] !== null) {
            $this->InputFormat = $param["InputFormat"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("NumBuckets",$param) and $param["NumBuckets"] !== null) {
            $this->NumBuckets = $param["NumBuckets"];
        }

        if (array_key_exists("Compressed",$param) and $param["Compressed"] !== null) {
            $this->Compressed = $param["Compressed"];
        }

        if (array_key_exists("StoredAsSubDirectories",$param) and $param["StoredAsSubDirectories"] !== null) {
            $this->StoredAsSubDirectories = $param["StoredAsSubDirectories"];
        }

        if (array_key_exists("SerdeLib",$param) and $param["SerdeLib"] !== null) {
            $this->SerdeLib = $param["SerdeLib"];
        }

        if (array_key_exists("SerdeName",$param) and $param["SerdeName"] !== null) {
            $this->SerdeName = $param["SerdeName"];
        }

        if (array_key_exists("BucketCols",$param) and $param["BucketCols"] !== null) {
            $this->BucketCols = $param["BucketCols"];
        }

        if (array_key_exists("SerdeParams",$param) and $param["SerdeParams"] !== null) {
            $this->SerdeParams = [];
            foreach ($param["SerdeParams"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->SerdeParams, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("SortCols",$param) and $param["SortCols"] !== null) {
            $this->SortCols = new DMSColumnOrder();
            $this->SortCols->deserialize($param["SortCols"]);
        }

        if (array_key_exists("Cols",$param) and $param["Cols"] !== null) {
            $this->Cols = [];
            foreach ($param["Cols"] as $key => $value){
                $obj = new DMSColumn();
                $obj->deserialize($value);
                array_push($this->Cols, $obj);
            }
        }

        if (array_key_exists("SortColumns",$param) and $param["SortColumns"] !== null) {
            $this->SortColumns = [];
            foreach ($param["SortColumns"] as $key => $value){
                $obj = new DMSColumnOrder();
                $obj->deserialize($value);
                array_push($this->SortColumns, $obj);
            }
        }
    }
}
