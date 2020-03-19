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
 * @method array getIdlFiles() Obtain Information list of all IDL files uploaded and verified in this request
 * @method void setIdlFiles(array $IdlFiles) Set Information list of all IDL files uploaded and verified in this request
 * @method integer getTotalCount() Obtain Number of tables verified to be valid in this request
 * @method void setTotalCount(integer $TotalCount) Set Number of tables verified to be valid in this request
 * @method array getTableInfos() Obtain Verification result parsed from the selected table after the IDL description file is read
 * @method void setTableInfos(array $TableInfos) Set Verification result parsed from the selected table after the IDL description file is read
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *CompareIdlFiles response structure.
 */
class CompareIdlFilesResponse extends AbstractModel
{
    /**
     * @var array Information list of all IDL files uploaded and verified in this request
     */
    public $IdlFiles;

    /**
     * @var integer Number of tables verified to be valid in this request
     */
    public $TotalCount;

    /**
     * @var array Verification result parsed from the selected table after the IDL description file is read
     */
    public $TableInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $IdlFiles Information list of all IDL files uploaded and verified in this request
     * @param integer $TotalCount Number of tables verified to be valid in this request
     * @param array $TableInfos Verification result parsed from the selected table after the IDL description file is read
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TableInfos",$param) and $param["TableInfos"] !== null) {
            $this->TableInfos = [];
            foreach ($param["TableInfos"] as $key => $value){
                $obj = new ParsedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->TableInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
