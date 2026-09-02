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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm Data Attacker or Victim Information
 *
 * @method string getIP() Obtain IP
 * @method void setIP(string $IP) Set IP
 * @method string getHostIP() Obtain HostIP
 * @method void setHostIP(string $HostIP) Set HostIP
 * @method string getOriginIP() Obtain Original IP
 * @method void setOriginIP(string $OriginIP) Set Original IP
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method string getInstanceID() Obtain Asset ID
 * @method void setInstanceID(string $InstanceID) Set Asset ID
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCountry() Obtain national
 * @method void setCountry(string $Country) Set national
 * @method string getAddress() Obtain Address.
 * @method void setAddress(string $Address) Set Address.
 * @method string getLatitude() Obtain Latitude
 * @method void setLatitude(string $Latitude) Set Latitude
 * @method string getLongitude() Obtain Longitude
 * @method void setLongitude(string $Longitude) Set Longitude
 * @method string getInfo() Obtain Information.
 * @method void setInfo(string $Info) Set Information.
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getName() Obtain Enterprise name
 * @method void setName(string $Name) Set Enterprise name
 * @method string getAccount() Obtain Account
 * @method void setAccount(string $Account) Set Account
 * @method string getFamily() Obtain Family Group
 * @method void setFamily(string $Family) Set Family Group
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method string getMD5() Obtain MD5 Value
 * @method void setMD5(string $MD5) Set MD5 Value
 * @method string getFileName() Obtain Malicious process file name
 * @method void setFileName(string $FileName) Set Malicious process file name
 * @method integer getAssetType() Obtain 1-Host Assets; 2-Domain Assets; 3-Network Assets
 * @method void setAssetType(integer $AssetType) Set 1-Host Assets; 2-Domain Assets; 3-Network Assets
 * @method array getFromLogAnalysisData() Obtain Information Fields of Source Log Analysis
 * @method void setFromLogAnalysisData(array $FromLogAnalysisData) Set Information Fields of Source Log Analysis
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getContainerID() Obtain Container ID
 * @method void setContainerID(string $ContainerID) Set Container ID
 */
class RoleInfo extends AbstractModel
{
    /**
     * @var string IP
     */
    public $IP;

    /**
     * @var string HostIP
     */
    public $HostIP;

    /**
     * @var string Original IP
     */
    public $OriginIP;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var string Asset ID
     */
    public $InstanceID;

    /**
     * @var string City
     */
    public $City;

    /**
     * @var string Province
     */
    public $Province;

    /**
     * @var string national
     */
    public $Country;

    /**
     * @var string Address.
     */
    public $Address;

    /**
     * @var string Latitude
     */
    public $Latitude;

    /**
     * @var string Longitude
     */
    public $Longitude;

    /**
     * @var string Information.
     */
    public $Info;

    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string Enterprise name
     */
    public $Name;

    /**
     * @var string Account
     */
    public $Account;

    /**
     * @var string Family Group
     */
    public $Family;

    /**
     * @var string Virus name
     */
    public $VirusName;

    /**
     * @var string MD5 Value
     */
    public $MD5;

    /**
     * @var string Malicious process file name
     */
    public $FileName;

    /**
     * @var integer 1-Host Assets; 2-Domain Assets; 3-Network Assets
     */
    public $AssetType;

    /**
     * @var array Information Fields of Source Log Analysis
     */
    public $FromLogAnalysisData;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Container ID
     */
    public $ContainerID;

    /**
     * @param string $IP IP
     * @param string $HostIP HostIP
     * @param string $OriginIP Original IP
     * @param integer $Port Port.
     * @param string $InstanceID Asset ID
     * @param string $City City
     * @param string $Province Province
     * @param string $Country national
     * @param string $Address Address.
     * @param string $Latitude Latitude
     * @param string $Longitude Longitude
     * @param string $Info Information.
     * @param string $Domain Domain
     * @param string $Name Enterprise name
     * @param string $Account Account
     * @param string $Family Family Group
     * @param string $VirusName Virus name
     * @param string $MD5 MD5 Value
     * @param string $FileName Malicious process file name
     * @param integer $AssetType 1-Host Assets; 2-Domain Assets; 3-Network Assets
     * @param array $FromLogAnalysisData Information Fields of Source Log Analysis
     * @param string $ContainerName Container name
     * @param string $ContainerID Container ID
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("OriginIP",$param) and $param["OriginIP"] !== null) {
            $this->OriginIP = $param["OriginIP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Family",$param) and $param["Family"] !== null) {
            $this->Family = $param["Family"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("FromLogAnalysisData",$param) and $param["FromLogAnalysisData"] !== null) {
            $this->FromLogAnalysisData = [];
            foreach ($param["FromLogAnalysisData"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->FromLogAnalysisData, $obj);
            }
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }
    }
}
