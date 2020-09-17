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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityTrends response structure.
 *
 * @method array getMalwares() Obtain Trojan event statistics array.
 * @method void setMalwares(array $Malwares) Set Trojan event statistics array.
 * @method array getNonLocalLoginPlaces() Obtain Unusual login location event statistics array.
 * @method void setNonLocalLoginPlaces(array $NonLocalLoginPlaces) Set Unusual login location event statistics array.
 * @method array getBruteAttacks() Obtain Brute force attack event statistics array.
 * @method void setBruteAttacks(array $BruteAttacks) Set Brute force attack event statistics array.
 * @method array getVuls() Obtain Vulnerability statistics array.
 * @method void setVuls(array $Vuls) Set Vulnerability statistics array.
 * @method array getBaseLines() Obtain Baseline statistics array.
 * @method void setBaseLines(array $BaseLines) Set Baseline statistics array.
 * @method array getMaliciousRequests() Obtain Statistics array of malicious requests.
 * @method void setMaliciousRequests(array $MaliciousRequests) Set Statistics array of malicious requests.
 * @method array getHighRiskBashs() Obtain Statistics array of high-risk commands.
 * @method void setHighRiskBashs(array $HighRiskBashs) Set Statistics array of high-risk commands.
 * @method array getReverseShells() Obtain Statistics array of reverse shells.
 * @method void setReverseShells(array $ReverseShells) Set Statistics array of reverse shells.
 * @method array getPrivilegeEscalations() Obtain Statistics array of local privilege escalations.
 * @method void setPrivilegeEscalations(array $PrivilegeEscalations) Set Statistics array of local privilege escalations.
 * @method array getCyberAttacks() Obtain Statistics array of network attacks.
 * @method void setCyberAttacks(array $CyberAttacks) Set Statistics array of network attacks.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecurityTrendsResponse extends AbstractModel
{
    /**
     * @var array Trojan event statistics array.
     */
    public $Malwares;

    /**
     * @var array Unusual login location event statistics array.
     */
    public $NonLocalLoginPlaces;

    /**
     * @var array Brute force attack event statistics array.
     */
    public $BruteAttacks;

    /**
     * @var array Vulnerability statistics array.
     */
    public $Vuls;

    /**
     * @var array Baseline statistics array.
     */
    public $BaseLines;

    /**
     * @var array Statistics array of malicious requests.
     */
    public $MaliciousRequests;

    /**
     * @var array Statistics array of high-risk commands.
     */
    public $HighRiskBashs;

    /**
     * @var array Statistics array of reverse shells.
     */
    public $ReverseShells;

    /**
     * @var array Statistics array of local privilege escalations.
     */
    public $PrivilegeEscalations;

    /**
     * @var array Statistics array of network attacks.
     */
    public $CyberAttacks;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Malwares Trojan event statistics array.
     * @param array $NonLocalLoginPlaces Unusual login location event statistics array.
     * @param array $BruteAttacks Brute force attack event statistics array.
     * @param array $Vuls Vulnerability statistics array.
     * @param array $BaseLines Baseline statistics array.
     * @param array $MaliciousRequests Statistics array of malicious requests.
     * @param array $HighRiskBashs Statistics array of high-risk commands.
     * @param array $ReverseShells Statistics array of reverse shells.
     * @param array $PrivilegeEscalations Statistics array of local privilege escalations.
     * @param array $CyberAttacks Statistics array of network attacks.
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
        if (array_key_exists("Malwares",$param) and $param["Malwares"] !== null) {
            $this->Malwares = [];
            foreach ($param["Malwares"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->Malwares, $obj);
            }
        }

        if (array_key_exists("NonLocalLoginPlaces",$param) and $param["NonLocalLoginPlaces"] !== null) {
            $this->NonLocalLoginPlaces = [];
            foreach ($param["NonLocalLoginPlaces"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->NonLocalLoginPlaces, $obj);
            }
        }

        if (array_key_exists("BruteAttacks",$param) and $param["BruteAttacks"] !== null) {
            $this->BruteAttacks = [];
            foreach ($param["BruteAttacks"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->BruteAttacks, $obj);
            }
        }

        if (array_key_exists("Vuls",$param) and $param["Vuls"] !== null) {
            $this->Vuls = [];
            foreach ($param["Vuls"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->Vuls, $obj);
            }
        }

        if (array_key_exists("BaseLines",$param) and $param["BaseLines"] !== null) {
            $this->BaseLines = [];
            foreach ($param["BaseLines"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->BaseLines, $obj);
            }
        }

        if (array_key_exists("MaliciousRequests",$param) and $param["MaliciousRequests"] !== null) {
            $this->MaliciousRequests = [];
            foreach ($param["MaliciousRequests"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->MaliciousRequests, $obj);
            }
        }

        if (array_key_exists("HighRiskBashs",$param) and $param["HighRiskBashs"] !== null) {
            $this->HighRiskBashs = [];
            foreach ($param["HighRiskBashs"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->HighRiskBashs, $obj);
            }
        }

        if (array_key_exists("ReverseShells",$param) and $param["ReverseShells"] !== null) {
            $this->ReverseShells = [];
            foreach ($param["ReverseShells"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->ReverseShells, $obj);
            }
        }

        if (array_key_exists("PrivilegeEscalations",$param) and $param["PrivilegeEscalations"] !== null) {
            $this->PrivilegeEscalations = [];
            foreach ($param["PrivilegeEscalations"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->PrivilegeEscalations, $obj);
            }
        }

        if (array_key_exists("CyberAttacks",$param) and $param["CyberAttacks"] !== null) {
            $this->CyberAttacks = [];
            foreach ($param["CyberAttacks"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->CyberAttacks, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
