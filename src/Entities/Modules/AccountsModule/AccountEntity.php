<?php declare(strict_types = 1);

/**
 * AccountEntity.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           01.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\AccountsModule;

use DateTimeInterface;
use FastyBird\Metadata\Types;
use Nette\Utils;
use Ramsey\Uuid;

/**
 * Account entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class AccountEntity implements IAccountEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var string */
	private string $firstName;

	/** @var string */
	private string $lastName;

	/** @var string|null */
	private ?string $middleName;

	/** @var string|null */
	private ?string $email;

	/** @var string */
	private string $language;

	/** @var Types\AccountStateType */
	private Types\AccountStateType $state;

	/** @var DateTimeInterface|null */
	private ?DateTimeInterface $registered = null;

	/** @var DateTimeInterface|null */
	private ?DateTimeInterface $lastVisit = null;

	/** @var string[] */
	private array $roles;

	/**
	 * @param string $id
	 * @param string $firstName
	 * @param string $lastName
	 * @param string $language
	 * @param string $state
	 * @param string|null $middleName
	 * @param string|null $email
	 * @param string|null $registered
	 * @param string|null $lastVisit
	 * @param string[] $roles
	 */
	public function __construct(
		string $id,
		string $firstName,
		string $lastName,
		string $language,
		string $state,
		?string $middleName = null,
		?string $email = null,
		?string $registered = null,
		?string $lastVisit = null,
		array $roles = []
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->middleName = $middleName;
		$this->email = $email;
		$this->language = $language;
		$this->state = Types\AccountStateType::get($state);
		$this->roles = $roles;

		if ($registered !== null) {
			$registered = Utils\DateTime::createFromFormat(DateTimeInterface::ATOM, $registered);

			if ($registered instanceof DateTimeInterface) {
				$this->registered = $registered;
			}
		}

		if ($lastVisit !== null) {
			$lastVisit = Utils\DateTime::createFromFormat(DateTimeInterface::ATOM, $lastVisit);

			if ($lastVisit instanceof DateTimeInterface) {
				$this->lastVisit = $lastVisit;
			}
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function getId(): Uuid\UuidInterface
	{
		return $this->id;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getFirstName(): string
	{
		return $this->firstName;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getLastName(): string
	{
		return $this->lastName;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getMiddleName(): ?string
	{
		return $this->middleName;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getState(): Types\AccountStateType
	{
		return $this->state;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getLanguage(): string
	{
		return $this->language;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getRegistered(): ?DateTimeInterface
	{
		return $this->registered;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getLastVisit(): ?DateTimeInterface
	{
		return $this->lastVisit;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getRoles(): array
	{
		return $this->roles;
	}

}
