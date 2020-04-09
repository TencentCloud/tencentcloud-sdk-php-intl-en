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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupAccess response structure.
 *
 * @method string getRegion() Obtain Instance region
 * @method void setRegion(string $Region) Set Instance region
 * @method string getBucket() Obtain The bucket where a backup file is located
 * @method void setBucket(string $Bucket) Set The bucket where a backup file is located
 * @method array getFiles() Obtain Storage information of a backup file
 * @method void setFiles(array $Files) Set Storage information of a backup file
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBackupAccessResponse extends AbstractModel
{
    /**
     * @var string Instance region
     */
    public $Region;

    /**
     * @var string The bucket where a backup file is located
     */
    public $Bucket;

    /**
     * @var array Storage information of a backup file
     */
    public $Files;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Region Instance region
     * @param string $Bucket The bucket where a backup file is located
     * @param array $Files Storage information of a backup file
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new BackupFile();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
