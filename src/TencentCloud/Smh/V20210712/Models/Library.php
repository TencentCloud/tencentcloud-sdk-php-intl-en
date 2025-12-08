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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PaaS service media library information.
 *
 * @method string getLibraryId() Obtain Media library ID.
 * @method void setLibraryId(string $LibraryId) Set Media library ID.
 * @method string getName() Obtain Specifies the friendly name of the media library.
 * @method void setName(string $Name) Set Specifies the friendly name of the media library.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getBucketName() Obtain Specifies the COS storage bucket bound to the media library.
 * @method void setBucketName(string $BucketName) Set Specifies the COS storage bucket bound to the media library.
 * @method string getBucketRegion() Obtain Specifies the region where the COS bucket bound to the media library is located.
 * @method void setBucketRegion(string $BucketRegion) Set Specifies the region where the COS bucket bound to the media library is located.
 * @method string getAccessDomain() Obtain Specifies the access domain of the business API for the media library.
 * @method void setAccessDomain(string $AccessDomain) Set Specifies the access domain of the business API for the media library.
 * @method string getCreationTime() Obtain Creation time of the media library.
 * @method void setCreationTime(string $CreationTime) Set Creation time of the media library.
 * @method LibraryExtension getLibraryExtension() Obtain Media library configuration item.
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) Set Media library configuration item.
 * @method string getSize() Obtain Media library amount in Bytes. since the number type has precision limitations, this field is a String type.
 * @method void setSize(string $Size) Set Media library amount in Bytes. since the number type has precision limitations, this field is a String type.
 * @method string getDirNum() Obtain Number of media library directories. since the String type is used due to precision limitations of the number type, this field is of String type.
 * @method void setDirNum(string $DirNum) Set Number of media library directories. since the String type is used due to precision limitations of the number type, this field is of String type.
 * @method string getFileNum() Obtain Number of files in the media library. since the String type is used due to precision limitations of the number type, this field is of String type.
 * @method void setFileNum(string $FileNum) Set Number of files in the media library. since the String type is used due to precision limitations of the number type, this field is of String type.
 */
class Library extends AbstractModel
{
    /**
     * @var string Media library ID.
     */
    public $LibraryId;

    /**
     * @var string Specifies the friendly name of the media library.
     */
    public $Name;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var string Specifies the COS storage bucket bound to the media library.
     */
    public $BucketName;

    /**
     * @var string Specifies the region where the COS bucket bound to the media library is located.
     */
    public $BucketRegion;

    /**
     * @var string Specifies the access domain of the business API for the media library.
     */
    public $AccessDomain;

    /**
     * @var string Creation time of the media library.
     */
    public $CreationTime;

    /**
     * @var LibraryExtension Media library configuration item.
     */
    public $LibraryExtension;

    /**
     * @var string Media library amount in Bytes. since the number type has precision limitations, this field is a String type.
     */
    public $Size;

    /**
     * @var string Number of media library directories. since the String type is used due to precision limitations of the number type, this field is of String type.
     */
    public $DirNum;

    /**
     * @var string Number of files in the media library. since the String type is used due to precision limitations of the number type, this field is of String type.
     */
    public $FileNum;

    /**
     * @param string $LibraryId Media library ID.
     * @param string $Name Specifies the friendly name of the media library.
     * @param string $Remark Remarks.
     * @param string $BucketName Specifies the COS storage bucket bound to the media library.
     * @param string $BucketRegion Specifies the region where the COS bucket bound to the media library is located.
     * @param string $AccessDomain Specifies the access domain of the business API for the media library.
     * @param string $CreationTime Creation time of the media library.
     * @param LibraryExtension $LibraryExtension Media library configuration item.
     * @param string $Size Media library amount in Bytes. since the number type has precision limitations, this field is a String type.
     * @param string $DirNum Number of media library directories. since the String type is used due to precision limitations of the number type, this field is of String type.
     * @param string $FileNum Number of files in the media library. since the String type is used due to precision limitations of the number type, this field is of String type.
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("AccessDomain",$param) and $param["AccessDomain"] !== null) {
            $this->AccessDomain = $param["AccessDomain"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LibraryExtension",$param) and $param["LibraryExtension"] !== null) {
            $this->LibraryExtension = new LibraryExtension();
            $this->LibraryExtension->deserialize($param["LibraryExtension"]);
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("DirNum",$param) and $param["DirNum"] !== null) {
            $this->DirNum = $param["DirNum"];
        }

        if (array_key_exists("FileNum",$param) and $param["FileNum"] !== null) {
            $this->FileNum = $param["FileNum"];
        }
    }
}
