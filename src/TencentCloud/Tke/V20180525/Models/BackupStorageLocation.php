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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Storage repository information
 *
 * @method string getName() Obtain Backup repository name	
 * @method void setName(string $Name) Set Backup repository name	
 * @method string getStorageRegion() Obtain Repository region, such as `ap-guangzhou`	
 * @method void setStorageRegion(string $StorageRegion) Set Repository region, such as `ap-guangzhou`	
 * @method string getProvider() Obtain The provider of storage service. It defaults to Tencent Cloud. 	
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setProvider(string $Provider) Set The provider of storage service. It defaults to Tencent Cloud. 	
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getBucket() Obtain COS bucket name. For COS storage type, it must start with the prefix `tke-backup`. 	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucket(string $Bucket) Set COS bucket name. For COS storage type, it must start with the prefix `tke-backup`. 	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain COS bucket path 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set COS bucket path 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getState() Obtain Storage repository status 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setState(string $State) Set Storage repository status 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Status information 	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Status information 	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastValidationTime() Obtain Last checked time 	
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setLastValidationTime(string $LastValidationTime) Set Last checked time 	
Note: This parameter may return null, indicating that no valid values can be obtained.
 */
class BackupStorageLocation extends AbstractModel
{
    /**
     * @var string Backup repository name	
     */
    public $Name;

    /**
     * @var string Repository region, such as `ap-guangzhou`	
     */
    public $StorageRegion;

    /**
     * @var string The provider of storage service. It defaults to Tencent Cloud. 	
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Provider;

    /**
     * @var string COS bucket name. For COS storage type, it must start with the prefix `tke-backup`. 	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bucket;

    /**
     * @var string COS bucket path 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string Storage repository status 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @var string Status information 	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Last checked time 	
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $LastValidationTime;

    /**
     * @param string $Name Backup repository name	
     * @param string $StorageRegion Repository region, such as `ap-guangzhou`	
     * @param string $Provider The provider of storage service. It defaults to Tencent Cloud. 	
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param string $Bucket COS bucket name. For COS storage type, it must start with the prefix `tke-backup`. 	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path COS bucket path 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $State Storage repository status 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Status information 	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastValidationTime Last checked time 	
Note: This parameter may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("LastValidationTime",$param) and $param["LastValidationTime"] !== null) {
            $this->LastValidationTime = $param["LastValidationTime"];
        }
    }
}
